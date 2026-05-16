<?php

use App\Http\Controllers\AssessmentSignupController;
use App\Http\Controllers\WhatsAppOtpController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('home');
})->name('home');

// RESOURCES PAGES
Route::get('/career-videos', function () {
    return view('resources.career-videos');
})->name('career.videos');

Route::get('/career-articles', function () {
    return view('resources.career-articles');
})->name('career.articles');

Route::get('/career-library', function () {
    return view('resources.career-library');
})->name('career.library');

Route::get('/parenting-community', function () {
    return view('resources.parenting-community');
})->name('parenting.community');

Route::get('/students-corner', function () {
    return view('resources.students-corner');
})->name('students.corner');

Route::get('/entrance-exams-calendar', function () {
    return view('resources.exam-calendar');
})->name('exam.calendar');

Route::get('/faqs', function () {
    return view('resources.faqs');
})->name('faqs');

Route::get('/events-gallery', function () {
    return view('resources.events-gallery');
})->name('events.gallery');

Route::get('/certified-counsellor', function () {
    return view('resources.certified-counsellor');
})->name('certified.counsellor');

Route::get('/join-as-intern', function () {
    return view('resources.join-intern');
})->name('join.intern');

Route::get('/join-as-team-member', function () {
    return view('resources.join-team');
})->name('join.team');

Route::get('/join-as-franchisee', function () {
    return view('resources.join-franchise');
})->name('join.franchise');

Route::get('/institutional-tieups', function () {
    return view('resources.tieups');
})->name('institutional.tieups');

Route::get('/test-code', function () {
    return view('resources.test-code');
})->name('test.code');

Route::post('/assessment-signup', [AssessmentSignupController::class, 'store'])
    ->name('assessment.signup');

// Route::get('/test-result/{attempt}', function ($attemptId) {

//     $attempt = \App\Models\TestAttempt::with('traitResults')
//         ->findOrFail($attemptId);

//     return view('test-result', compact('attempt'));

// })->name('test.result');

Route::post('/send-otp', [WhatsAppOtpController::class, 'sendOtp'])
    ->name('send.otp');

Route::post('/verify-otp', [WhatsAppOtpController::class, 'verifyOtp'])
    ->name('verify.otp');

Route::get('/test-result/{attempt}', function ($attemptId) {
    // Attempt ke sath questions ko bhi load karein taaki type check kar sakein
    $attempt = \App\Models\TestAttempt::with(['traitResults', 'test.sections.parts.questions'])
        ->findOrFail($attemptId);

    // Check karein ki kya is test mein koi bhi question 'likert' type ka hai
    // Hum test ke pehle section ke pehle part ka pehla question check kar sakte hain
    // ya poore collection mein search kar sakte hain.

    $isLikertTest = false;
    foreach ($attempt->test->sections as $section) {
        foreach ($section->parts as $part) {
            if ($part->questions->where('question_type', 'likert')->count() > 0) {
                $isLikertTest = true;
                break 2; // Loop se bahar nikal jao
            }
        }
    }

    // Agar likert questions mile toh test-result1 dikhao, warna normal test-result
    if ($isLikertTest) {
        return view('test-result1', compact('attempt'));
    }

    return view('test-result', compact('attempt'));

})->name('test.result');

Route::get('/home', function () {
    return view('home');
})->name('home.new');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/process', function () {
    return view('process');
})->name('process');

Route::get('/stories', function () {
    return view('stories');
})->name('stories');

Route::get('/assessment', function () {
    return view('assessment');
})->name('assessment');

Route::get('/resources', function () {
    return view('resources');
})->name('resources');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/services', function () {
    return view('services');
})->name('services');

// Route::get('/free-test', function () {
//     return view('free-test.free-test');
// })->name('free.test');

Route::get('/free-test', \App\Livewire\FreeTestPlayer::class)->name('free.test');

// Public test access for guests
Route::get('/start-test-public', function () {
    $testId = request('testId');

    return view('test-start-public', compact('testId'));
})->name('test.start.public');

Route::get('/test/{attempt}/play-public', function (\App\Models\TestAttempt $attempt) {
    return view('test-play', ['attempt' => $attempt]);
})->name('test.play.public');

Route::get('dashboard', \App\Livewire\Dashboard::class)
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::view('tests', 'tests')->name('tests');
    Route::view('tests/create', 'admin.test-builder')->name('tests.create');
    Route::get('tests/{test}/edit', function (\App\Models\Test $test) {
        return view('admin.test-builder', ['test' => $test]);
    })->name('tests.edit');
    Route::get('parts/{part}/questions', function (\App\Models\Part $part) {
        return view('admin.question-manager', ['part' => $part]);
    })->name('questions.manage');
});

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('user-password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');

    Volt::route('settings/two-factor', 'settings.two-factor')
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');

    // Test Marketplace & Purchase (now includes students)
    Route::middleware(['role:counsellor|professional|institute|student'])->group(function () {
        Route::get('/marketplace', function () {
            return view('test-marketplace');
        })->name('test.marketplace');

        Route::get('/test/{testId}/purchase', function ($testId) {
            return view('test-purchase', compact('testId'));
        })->name('test.purchase');
    });

    // Counsellor-only: Test assignment
    Route::middleware(['role:counsellor|professional|institute'])->group(function () {
        Route::get('/test/assign/{purchaseId}', function ($purchaseId) {
            return view('test-assign', compact('purchaseId'));
        })->name('assign.test');
    });

    // Test Taking
    Route::get('/my-tests', function () {
        return view('my-tests');
    })->name('my.tests');

    Route::get('/test/start', function () {
        $testId = request('testId');
        $assignmentId = request('assignmentId');

        return view('test-start', compact('testId', 'assignmentId'));
    })->name('test.start');

    Route::get('/test/{attempt}/play', function (\App\Models\TestAttempt $attempt) {
        return view('test-play', ['attempt' => $attempt]);
    })->name('test.play');
    Route::get('/test/{attempt}/result', function (\App\Models\TestAttempt $attempt) {
        return view('test-result', ['attempt' => $attempt]);
    })->name('test.result');

    // PDF Download with authorization
    Route::get('/test/{attempt}/result/pdf', function (\App\Models\TestAttempt $attempt) {
        $user = auth()->user();

        // Admins can always download
        if ($user->hasRole('admin')) {
            // proceed
        }
        // Counsellors can download their assigned students' reports
        elseif ($user->hasAnyRole(['counsellor', 'professional', 'institute'])) {
            if ($attempt->assignment) {
                if ($attempt->assignment->assigner_id !== $user->id) {
                    abort(403, 'You can only download reports for students you assigned.');
                }
            } else {
                abort(403, 'This report is not from an assignment you created.');
            }
        }
        // Students can download if:
        // 1. The attempt belongs to them, AND
        // 2. They purchased the test directly, OR counsellor enabled allow_student_download
        elseif ($user->hasRole('student')) {
            if ($attempt->user_id !== $user->id) {
                abort(403, 'You can only download your own reports.');
            }

            $assignment = $attempt->assignment;
            if ($assignment) {
                // Check if this is a student's own purchase (self-assignment)
                $purchase = $assignment->purchase;
                if ($purchase && $purchase->purchased_by_student_id === $user->id) {
                    // Student purchased directly - always allow download
                    // proceed
                } elseif (! $purchase || ! $purchase->allow_student_download) {
                    abort(403, 'Download not permitted by your counsellor.');
                }
            } else {
                // Check if student purchased directly (no assignment)
                $hasPurchase = \App\Models\Purchase::where('purchased_by_student_id', $user->id)
                    ->where('test_id', $attempt->test_id)
                    ->exists();
                if (! $hasPurchase) {
                    abort(403, 'You need to purchase this test to download the report.');
                }
            }
        } else {
            abort(403);
        }

        $pdfService = new \App\Services\TestResultPdf;

        return $pdfService->generate($attempt)->download('test-result-'.$attempt->id.'.pdf');
    })->name('test.result.pdf');

    // Admin Reports
    Route::prefix('reports/admin')->middleware(['role:admin'])->group(function () {
        Route::get('/users', App\Livewire\Reports\Admin\UserReport::class)->name('reports.admin.users');
        Route::get('/financial', App\Livewire\Reports\Admin\FinancialReport::class)->name('reports.admin.financial');
        Route::get('/activity', App\Livewire\Reports\Admin\ActivityReport::class)->name('reports.admin.activity');
        Route::get('/counsellor-purchases', App\Livewire\Reports\Admin\CounsellorPurchaseReport::class)->name('reports.admin.counsellor-purchases');
        Route::get('/student-purchases', App\Livewire\Reports\Admin\StudentPurchaseReport::class)->name('reports.admin.student-purchases');
        Route::get('/assignments', App\Livewire\Reports\Admin\AssignmentReport::class)->name('reports.admin.assignments');
    });

    // Admin Settings
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admin/score-scales', App\Livewire\Admin\ScoreScaleManager::class)->name('admin.score-scales');
        Route::get('/admin/site-settings', App\Livewire\Admin\SiteSettings::class)->name('admin.site-settings');
    });

    // Counsellor Reports
    Route::prefix('reports/counsellor')->middleware(['role:counsellor|professional|institute'])->group(function () {
        Route::get('/students', App\Livewire\Reports\Counsellor\StudentReport::class)->name('reports.counsellor.students');
        Route::get('/purchases', App\Livewire\Reports\Counsellor\PurchaseReport::class)->name('reports.counsellor.purchases');
    });

    // Student Reports
    Route::prefix('reports/student')->middleware(['role:student'])->group(function () {
        Route::get('/results', App\Livewire\Reports\Student\ResultReport::class)->name('reports.student.results');
    });
});
