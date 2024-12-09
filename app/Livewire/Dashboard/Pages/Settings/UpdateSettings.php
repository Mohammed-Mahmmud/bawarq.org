<?php

namespace App\Livewire\Dashboard\Pages\Settings;

use App\Http\Requests\Dashboard\SettingsRequest;
use App\Models\Setting;
use Livewire\Component;

class UpdateSettings extends Component
{
    public $title, $description, $settings;

    public function mount()
    {
        $this->settings = Setting::first();
        if ($this->settings) {
            $this->title = $this->settings->title;
            $this->description = $this->settings->description;
        }
    }

    public function rules()
    {
        return (new SettingsRequest())->rules();
    }

    public function submit()
    {
        // Validate the data
        $data = $this->validate();

        // Update existing record or create a new one
        $this->settings = Setting::updateOrCreate(
            ['id' => 1],
            $data
        );

        session()->flash('message', 'Settings updated successfully');
    }

    public function render()
    {
        return view('dashboard.pages.settings.update-settings');
    }
}
