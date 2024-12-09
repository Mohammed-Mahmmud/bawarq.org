<?php

namespace App\Livewire\Dashboard\Pages\Emails;

use App\Models\Email;
use Livewire\Component;

class Delete extends Component
{
    public $email;
    protected $listeners = ['destroy'];
    public function destroy($id)
    {
        $this->email = Email::findOrFail($id);
        $this->dispatch('deleteModalToggle');
    }
    public function submit()
    {

        $this->email->delete();
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshTable')->to(View::class);
        $this->reset('email');
        toastr()->error('Data has been deleted successfully!');
    }

    public function render()
    {
        return view('dashboard.pages.emails.delete');
    }
}
