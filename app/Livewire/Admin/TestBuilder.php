<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class TestBuilder extends Component
{
    public ?\App\Models\Test $test = null;
    public $title = '';
    public $description = '';
    public $type = 'aptitude';
    public $code = '';
    public $is_active = true;
    public $is_free = false;
    public $prices = [
        'student' => '',
        'counsellor' => '',
        'professional' => '',
        'institute' => '',
    ];

    public function mount(\App\Models\Test $test = null)
    {
        if ($test && $test->exists) {
            $this->test = $test;
            $this->title = $test->title;
            $this->description = $test->description;
            $this->type = $test->type;
            $this->code = $test->code;
            $this->is_active = $test->is_active;
            $this->is_free = $test->is_free;

            foreach ($test->prices as $price) {
                $this->prices[$price->role] = $price->price;
            }
        } else {
            $this->code = strtoupper(\Illuminate\Support\Str::random(8));
        }
    }

    public function save()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string',
            'code' => 'required|unique:tests,code,' . ($this->test->id ?? 'NULL'),
            'prices.*' => 'required|numeric|min:0',
        ]);

        // Generate slug from title
        $slug = \Illuminate\Support\Str::slug($this->title);

        // Check if slug already exists (excluding current test on edit)
        $existingSlug = \App\Models\Test::where('slug', $slug)
            ->when($this->test, function ($query) {
                return $query->where('id', '!=', $this->test->id);
            })
            ->exists();

        // If slug exists, append a unique suffix
        if ($existingSlug) {
            $slug = $slug . '-' . strtolower(\Illuminate\Support\Str::random(4));
        }

        if ($this->test) {
            $this->test->update([
                'title' => $this->title,
                'slug' => $slug,
                'description' => $this->description,
                'type' => $this->type,
                'code' => $this->code,
                'is_active' => $this->is_active,
                'is_free' => $this->is_free,
            ]);
        } else {
            $this->test = \App\Models\Test::create([
                'title' => $this->title,
                'slug' => $slug,
                'description' => $this->description,
                'type' => $this->type,
                'code' => $this->code,
                'is_active' => $this->is_active,
                'is_free' => $this->is_free,
            ]);
        }

        foreach ($this->prices as $role => $price) {
            $this->test->prices()->updateOrCreate(
                ['role' => $role],
                ['price' => $price, 'currency' => 'INR']
            );
        }

        session()->flash('message', 'Test saved successfully.');
        return redirect()->route('tests');
    }

    public function render()
    {
        return view('livewire.admin.test-builder');
    }
}
