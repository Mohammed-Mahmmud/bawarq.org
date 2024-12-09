<?php

namespace App\Livewire\Dashboard\Pages\Emails;

use App\Http\Requests\Dashboard\CourseRequest;
use App\Models\Course;
use App\Models\Email;
use App\Models\Skill;
use Illuminate\Support\Arr;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Update extends Component
{
    public $email, $data;
    protected $listeners = ['edit'];
    public function edit($id)
    {
        $this->data = Email::findOrFail($id);
        $this->email =  $this->data->email;
        $this->dispatch('updateModalToggle');
    }
    public function rules()
    {
        return [
            'email' => ['required', 'email', 'unique:emails,email'],
        ];
    }
    public function submit()
    {
        $data = $this->validate($this->rules());
        $this->data->update($data);
        $this->reset('email');
        $this->dispatch('updateModalToggle');
        $this->dispatch('refreshTable')->to(View::class);
        toastr()->success('Data has been saved successfully!');
    }
    public function render()
    {
        return view('dashboard.pages.emails.update');
    }
}
