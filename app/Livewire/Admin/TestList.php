<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class TestList extends Component
{
    public function delete($id)
    {
        \App\Models\Test::find($id)->delete();
    }

    public function render()
    {
        return view('livewire.admin.test-list', [
            'tests' => \App\Models\Test::latest()->paginate(10)
        ]);
    }
}
