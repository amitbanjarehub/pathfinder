<?php

namespace App\Livewire\Admin;

use App\Models\SiteSetting;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class SiteSettings extends Component
{
    use WithFileUploads;

    public $authBackgroundImage;
    public $currentAuthBackground;

    public function mount()
    {
        $this->currentAuthBackground = SiteSetting::get('auth_background_image');
    }

    public function save()
    {
        $this->validate([
            'authBackgroundImage' => 'nullable|image|max:5120', // 5MB max
        ]);

        if ($this->authBackgroundImage) {
            // Delete old image if exists and is in storage
            if ($this->currentAuthBackground && Storage::disk('public')->exists($this->currentAuthBackground)) {
                Storage::disk('public')->delete($this->currentAuthBackground);
            }

            // Store new image
            $path = $this->authBackgroundImage->store('settings', 'public');
            SiteSetting::set('auth_background_image', $path, 'image');
            $this->currentAuthBackground = $path;
            $this->authBackgroundImage = null;
        }

        session()->flash('success', __('Settings saved successfully.'));
    }

    public function render()
    {
        return view('livewire.admin.site-settings');
    }
}
