<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;

class QuestionManager extends Component
{
    use WithFileUploads;

    public \App\Models\Part $part;

    public $showQuestionForm = false;

    public $editingQuestionId = null;

    public $questionText = '';

    public $questionType = 'mcq';

    public $marks = 1;

    public $questionImage;

    public $options = [];

    public $optionImages = [];

    public function mount(\App\Models\Part $part)
    {
        $this->part = $part;
    }

    public function addQuestion()
    {
        $this->showQuestionForm = true;
        $this->resetQuestionForm();
        $this->options = [
            ['text' => '', 'is_correct' => false],
            ['text' => '', 'is_correct' => false],
            ['text' => '', 'is_correct' => false],
            ['text' => '', 'is_correct' => false],
        ];
        $this->optionImages = [];
    }

    public function editQuestion($id)
    {
        $question = \App\Models\Question::find($id);
        $this->editingQuestionId = $id;
        $this->questionText = $question->question_text;
        $this->questionType = $question->question_type;
        // $this->marks = $question->marks;
        $this->marks = $question->question_type === 'likert' ? null : $question->marks;
        $this->options = $question->options->map(fn ($opt) => [
            'id' => $opt->id,
            'text' => $opt->option_text,
            'is_correct' => $opt->is_correct,
            'image_path' => $opt->image_path,
        ])->toArray();

        // Initialize optionImages array to match options length
        $this->optionImages = array_fill(0, count($this->options), null);

        $this->showQuestionForm = true;
    }

    public function saveQuestion()
    {
        // $this->validate([
        //     'questionText' => 'required',
        //     'marks' => 'required|numeric|min:1',
        //     'questionImage' => 'nullable|image|max:2048', // 2MB Max
        //     'optionImages.*' => 'nullable|image|max:2048',
        // ]);

        $this->validate([
            'questionText' => 'required',
            'marks' => $this->questionType !== 'likert' ? 'required|numeric|min:1' : 'nullable',
            'questionImage' => 'nullable|image|max:2048',
            'optionImages.*' => 'nullable|image|max:2048',
        ]);

        $questionData = [
            'question_text' => $this->questionText,
            'question_type' => $this->questionType,
            // 'marks' => $this->marks,
        ];

        if ($this->questionType === 'likert') {
            // Default 7-point scale
            $questionData['marks'] = 7;
        } else {
            $questionData['marks'] = $this->marks;
        }

        if ($this->questionImage) {
            $questionData['image_path'] = $this->questionImage->store('questions', 'public');
        }

        if ($this->editingQuestionId) {
            $question = \App\Models\Question::find($this->editingQuestionId);
            $question->update($questionData);
        } else {
            $questionData['order'] = $this->part->questions()->count() + 1;
            $question = $this->part->questions()->create($questionData);
        }

        // Save options (for MCQ)
        if ($this->questionType === 'mcq') {
            // We need to be careful not to delete options if we are just updating text/images
            // But for simplicity, we often delete and recreate.
            // However, to preserve existing images if not replaced, we need a smarter approach.
            // For now, let's delete and recreate but try to carry over existing images if no new one is uploaded.

            // Actually, deleting and recreating is problematic for existing images unless we track them.
            // Let's iterate and update or create.

            $existingOptionIds = [];

            foreach ($this->options as $index => $option) {
                if (! empty($option['text']) || ! empty($this->optionImages[$index]) || ! empty($option['image_path'])) {

                    $optionData = [
                        'option_text' => $option['text'] ?? '',
                        'is_correct' => $option['is_correct'] ?? false,
                        'order' => $index + 1,
                    ];

                    if (isset($this->optionImages[$index]) && $this->optionImages[$index]) {
                        $optionData['image_path'] = $this->optionImages[$index]->store('options', 'public');
                    } elseif (isset($option['image_path'])) {
                        $optionData['image_path'] = $option['image_path'];
                    }

                    if (isset($option['id'])) {
                        $opt = \App\Models\Option::find($option['id']);
                        if ($opt) {
                            $opt->update($optionData);
                            $existingOptionIds[] = $opt->id;

                            continue;
                        }
                    }

                    $newOpt = $question->options()->create($optionData);
                    $existingOptionIds[] = $newOpt->id;
                }
            }

            // Remove options that were not included in the save
            $question->options()->whereNotIn('id', $existingOptionIds)->delete();
        }

        $this->showQuestionForm = false;
        $this->resetQuestionForm();
    }

    public function deleteQuestion($id)
    {
        \App\Models\Question::find($id)->delete();
    }

    public function cancelQuestionForm()
    {
        $this->showQuestionForm = false;
        $this->resetQuestionForm();
    }

    private function resetQuestionForm()
    {
        $this->editingQuestionId = null;
        $this->questionText = '';
        $this->questionType = 'mcq';
        // $this->marks = 1;
        $this->marks = $this->questionType === 'likert' ? null : 1;
        $this->questionImage = null;
        $this->options = [];
        $this->optionImages = [];
    }

    public function render()
    {
        return view('livewire.admin.question-manager', [
            'questions' => $this->part->questions()->with('options')->orderBy('order')->get(),
        ]);
    }
}
