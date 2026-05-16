<?php

namespace App\Livewire\Admin;

use App\Models\ScoreScale;
use App\Models\ScoreScaleRange;
use Livewire\Component;

class ScoreScaleManager extends Component
{
    public $scales;
    public $selectedScale = null;
    public $isCreating = false;
    
    // Scale Form
    public $scaleName = '';
    public $scaleDescription = '';
    
    // Range Form
    public $minScore = '';
    public $maxScore = '';
    public $stenScore = '';

    public function mount()
    {
        $this->loadScales();
    }

    public function loadScales()
    {
        $this->scales = ScoreScale::with('ranges')->get();
    }

    public function createScale()
    {
        $this->reset(['scaleName', 'scaleDescription', 'selectedScale']);
        $this->isCreating = true;
    }

    public function saveScale()
    {
        $this->validate([
            'scaleName' => 'required|string|max:255',
            'scaleDescription' => 'nullable|string',
        ]);

        $scale = ScoreScale::create([
            'name' => $this->scaleName,
            'description' => $this->scaleDescription,
        ]);

        $this->loadScales();
        $this->selectScale($scale->id);
        $this->isCreating = false;
    }

    public function selectScale($id)
    {
        $this->selectedScale = ScoreScale::with('ranges')->find($id);
        $this->scaleName = $this->selectedScale->name;
        $this->scaleDescription = $this->selectedScale->description;
        $this->isCreating = false;
    }

    public function updateScale()
    {
        if (!$this->selectedScale) return;

        $this->validate([
            'scaleName' => 'required|string|max:255',
            'scaleDescription' => 'nullable|string',
        ]);

        $this->selectedScale->update([
            'name' => $this->scaleName,
            'description' => $this->scaleDescription,
        ]);

        $this->loadScales();
    }

    public function deleteScale($id)
    {
        ScoreScale::find($id)->delete();
        $this->selectedScale = null;
        $this->loadScales();
    }

    public function addRange()
    {
        if (!$this->selectedScale) return;

        $this->validate([
            'minScore' => 'required|integer|min:0',
            'maxScore' => 'required|integer|gte:minScore',
            'stenScore' => 'required|integer|min:1|max:10',
        ]);

        $this->selectedScale->ranges()->create([
            'min_score' => $this->minScore,
            'max_score' => $this->maxScore,
            'sten_score' => $this->stenScore,
        ]);

        $this->reset(['minScore', 'maxScore', 'stenScore']);
        $this->selectScale($this->selectedScale->id); // Refresh ranges
    }

    public function deleteRange($id)
    {
        ScoreScaleRange::find($id)->delete();
        $this->selectScale($this->selectedScale->id); // Refresh ranges
    }

    public function render()
    {
        return view('livewire.admin.score-scale-manager');
    }
}
