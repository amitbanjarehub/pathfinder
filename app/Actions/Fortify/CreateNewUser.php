<?php

namespace App\Actions\Fortify;

use App\Models\Question;
use App\Models\TestAttempt;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Twilio\Rest\Client;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    public function create(array $input): User
    {
        // Validator::make($input, [
        //     'name' => ['required', 'string', 'max:255'],
        //     // 'email' => [
        //     //     'required',
        //     //     'string',
        //     //     'email',
        //     //     'max:255',

        // ]
        //     //     Rule::unique(User::class),
        //     // ],
        //     // 'password' => $this->passwordRules(),

        // ])->validate();

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],

            // 'email' => [
            //     'required',
            //     'string',
            //     'email',
            //     'max:255',
            //     Rule::unique(User::class),
            // ],

            // 'password' => $this->passwordRules(),

            'mobile_no' => ['required', 'digits:10'],

            'otp_verified' => ['required', 'in:1'],

            'role' => [
                'required',
                'string',
                'in:student,counsellor,professional,institute',
            ],

        ])->validate();

        // ✅ STEP 1: Create User
        $user = User::create([
            'name' => $input['name'],
            'mobile_no' => $input['mobile_no'],
            'mobile_verified' => true,
            // 'email' => $input['email'] ?? null,
            // 'password' => $input['password'],
        ]);

        // ✅ STEP 2: Assign Role
        $user->assignRole($input['role']);

        // 🔥🔥🔥 YAHI SE TERA MAIN LOGIC START HOGA 🔥🔥🔥

        // ✅ Check if free test session exists
        if (session()->has('free_test_answers')) {

            $answers = session()->get('free_test_answers');
            $testId = session()->get('free_test_id');

            // ✅ Step 1: Create Test Attempt
            $attempt = TestAttempt::create([
                'user_id' => $user->id,
                'test_id' => $testId,
                'status' => 'in_progress',
                'start_time' => now(),
            ]);

            // ✅ Step 2: Save answers
            // foreach ($answers as $ans) {
            //     $attempt->answers()->create([
            //         'question_id' => $ans['question_id'],
            //         'option_id' => $ans['option_id'],
            //         'status' => $ans['status'],
            //     ]);
            // }

            foreach ($answers as $ans) {
                // Pehle question ka type pata karein
                $question = \App\Models\Question::find($ans['question_id']);

                $insertData = [
                    'question_id' => $ans['question_id'],
                    'status' => $ans['status'],
                ];

                if ($question && $question->question_type === 'likert') {
                    // Agar Likert hai toh option_id NULL rakho aur value likert_value mein daalo
                    $insertData['option_id'] = null;
                    $insertData['likert_value'] = $ans['option_id']; // Session mein jo value aayi wo yahan jayegi
                } else {
                    // Agar MCQ hai toh normal option_id save karo
                    $insertData['option_id'] = $ans['option_id'];
                    $insertData['likert_value'] = null;
                }

                $attempt->answers()->create($insertData);
            }

            // ✅ Step 3: Fill unanswered questions
            $answeredIds = collect($answers)->pluck('question_id')->toArray();

            $allQuestionIds = Question::whereHas('part.section', function ($q) use ($testId) {
                $q->where('test_id', $testId);
            })->pluck('id')->toArray();

            $unanswered = array_diff($allQuestionIds, $answeredIds);

            foreach ($unanswered as $qid) {
                $attempt->answers()->create([
                    'question_id' => $qid,
                    'status' => 'skipped',
                ]);
            }

            // ✅ Step 4: Calculate score
            $totalScore = 0;

            foreach ($attempt->answers()->with('option', 'question')->get() as $answer) {
                if ($answer->option && $answer->option->is_correct) {
                    $totalScore += $answer->question->marks;
                }
            }

            // ✅ Step 5: Update attempt
            // $attempt->update([
            //     'status' => 'completed',
            //     'score' => $totalScore,
            //     'end_time' => now(),
            // ]);

            // // ✅ Step 6: Clear session
            // session()->forget('free_test_answers');
            // session()->forget('free_test_id');

            // ✅ Step 5: Update attempt
            $attempt->update([
                'status' => 'completed',
                'score' => $totalScore,
                'end_time' => now(),
            ]);

            // 🔥🔥🔥 NEW LOGIC: Likert Calculation for First Time User 🔥🔥🔥
            // Check karein ki kya is test mein Likert questions hain
            $hasLikert = \App\Models\Question::whereHas('part.section', function ($q) use ($testId) {
                $q->where('test_id', $testId);
            })->where('question_type', 'likert')->exists();

            if ($hasLikert) {
                // Service ko call karein taaki trait_results table mein data chala jaye
                app(\App\Services\LikertScoreCalculator::class)->calculateAndSave($attempt);
            }
            // 🔥🔥🔥 END NEW LOGIC 🔥🔥🔥

            // =========================
            // PDF GENERATION START
            // =========================

            // Fresh attempt with relations
            $attempt = TestAttempt::with([
                'traitResults',
                'test',
                'user',
            ])->find($attempt->id);

            // -------------------------
            // SMALL PDF
            // -------------------------

            $smallPdf = Pdf::loadView('pdf.small-result', [
                'attempt' => $attempt,
            ]);

            $smallPdfName = 'pdfs/small/result_'.$user->id.'_'.time().'.pdf';

            Storage::disk('public')->put(
                $smallPdfName,
                $smallPdf->output()
            );

            // -------------------------
            // FULL PDF
            // -------------------------

            $fullPdf = Pdf::loadView('pdf.full-result', [
                'attempt' => $attempt,
            ]);

            $fullPdfName = 'pdfs/full/result_'.$user->id.'_'.time().'.pdf';

            Storage::disk('public')->put(
                $fullPdfName,
                $fullPdf->output()
            );

            // -------------------------
            // SAVE PATHS IN USER TABLE
            // -------------------------

            $user->small_pdf = $smallPdfName;
            $user->full_pdf = $fullPdfName;
            $user->save();

            // =========================
            // SEND WHATSAPP MESSAGE
            // =========================

            $smallPdfUrl = asset('storage/'.$smallPdfName);

            $twilio = new \Twilio\Rest\Client(
                env('TWILIO_SID'),
                env('TWILIO_AUTH_TOKEN')
            );

            $message = "Hello {$user->name},

Your Pathfinder test result is ready.

Download PDF:
{$smallPdfUrl}

Thanks.";

            $twilio->messages->create(
                'whatsapp:+91'.$user->mobile_no,
                [
                    'from' => env('TWILIO_WHATSAPP_FROM'),
                    'body' => $message,
                ]
            );

            // =========================
            // PDF GENERATION END
            // =========================

            // ✅ Step 6: Clear session
            session()->forget('free_test_answers');
            session()->forget('free_test_id');
        }

        // 🔥🔥🔥 END LOGIC 🔥🔥🔥

        Auth::login($user);

        return $user;
    }
}
