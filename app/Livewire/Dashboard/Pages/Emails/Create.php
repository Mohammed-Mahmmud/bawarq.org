<?php

namespace App\Livewire\Dashboard\Pages\Emails;

use App\Models\Email;
use Livewire\Component;

class Create extends Component
{
    public $email;

    public function rules()
    {
        return [
            'email' => ['required', 'email', 'unique:emails,email'],
        ];
    }
    public function submit()
    {
        $data = $this->validate($this->rules());
        Email::create($data);
        $this->reset('email');
        $this->dispatch('createModalToggle');
        $this->dispatch('refreshTable')->to(View::class);
        toastr()->success('Data has been saved successfully!');
    }
    public function render()
    {
        return view('dashboard.pages.emails.create');
    }
}
