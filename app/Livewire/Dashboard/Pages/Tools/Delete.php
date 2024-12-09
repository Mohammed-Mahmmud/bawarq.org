<?php

namespace App\Livewire\Dashboard\Pages\Tools;

use App\Models\Tool;
use Livewire\Component;

class Delete extends Component
{
    public $tool;
    protected $listeners = ['destroy'];
    public function destroy($id)
    {
        $this->tool = Tool::findOrFail($id);
        $this->dispatch('deleteModalToggle');
    }
    public function submit()
    {

        if (file_exists($this->tool->image)) {
            unlink($this->tool->image);
        }
        $this->tool->delete();
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshTable')->to(View::class);
        $this->reset('tool');
        toastr()->error('Data has been deleted successfully!');
    }

    public function render()
    {
        return view('dashboard.pages.tools.delete');
    }
}
