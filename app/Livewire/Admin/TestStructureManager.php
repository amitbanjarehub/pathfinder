<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class TestStructureManager extends Component
{
    public \App\Models\Test $test;

    public $newSectionTitle = '';
    public $newSectionDescription = '';
    public $newSectionTimeLimit = 10;

    public $editingSectionId = null;
    public $editingSectionTitle = '';
    public $editingSectionDescription = '';
    public $editingSectionTimeLimit = null;
    public $editingSectionScoreScaleId = null;

    public function mount(\App\Models\Test $test)
    {
        $this->test = $test;
    }

    public function addSection()
    {
        $this->validate([
            'newSectionTitle' => 'required|string|max:255',
            'newSectionDescription' => 'nullable|string',
            'newSectionTimeLimit' => 'nullable|integer|min:0',
        ]);

        $this->test->sections()->create([
            'title' => $this->newSectionTitle,
            'description' => $this->newSectionDescription ?: null,
            'time_limit' => $this->newSectionTimeLimit ?: null,
            'order' => $this->test->sections()->count() + 1,
        ]);

        $this->reset(['newSectionTitle', 'newSectionDescription', 'newSectionTimeLimit']);
        $this->newSectionTimeLimit = 10;
        $this->test->refresh();
    }

    public function deleteSection($sectionId)
    {
        $section = $this->test->sections()->find($sectionId);
        if ($section) {
            $section->delete();
            $this->test->refresh();
        }
    }

    public function editSection($sectionId)
    {
        $section = \App\Models\Section::find($sectionId);
        $this->editingSectionId = $sectionId;
        $this->editingSectionTitle = $section->title;
        $this->editingSectionDescription = $section->description;
        $this->editingSectionTimeLimit = $section->time_limit;
        $this->editingSectionScoreScaleId = $section->score_scale_id;
    }

    public function updateSection()
    {
        $this->validate([
            'editingSectionTitle' => 'required|string|max:255',
            'editingSectionDescription' => 'nullable|string',
            'editingSectionTimeLimit' => 'nullable|integer|min:0',
            'editingSectionScoreScaleId' => 'nullable|exists:score_scales,id',
        ]);

        $section = \App\Models\Section::find($this->editingSectionId);
        $section->update([
            'title' => $this->editingSectionTitle,
            'description' => $this->editingSectionDescription,
            'time_limit' => $this->editingSectionTimeLimit ?: null,
            'score_scale_id' => $this->editingSectionScoreScaleId ?: null,
        ]);

        $this->reset(['editingSectionId', 'editingSectionTitle', 'editingSectionDescription', 'editingSectionTimeLimit', 'editingSectionScoreScaleId']);
        $this->test->refresh();
    }

    public function addPart($sectionId)
    {
        $section = $this->test->sections()->find($sectionId);
        $section->parts()->create([
            'title' => 'New Part',
            'order' => $section->parts()->count() + 1,
        ]);
    }

    public function deletePart($id)
    {
        \App\Models\Part::find($id)->delete();
    }

    public function updatePart($id, $title)
    {
        \App\Models\Part::find($id)->update(['title' => $title]);
    }

    public function render()
    {
        return view('livewire.admin.test-structure-manager', [
            'sections' => $this->test->sections()->with('parts')->orderBy('order')->get(),
            'scoreScales' => \App\Models\ScoreScale::all(),
        ]);
    }
}
