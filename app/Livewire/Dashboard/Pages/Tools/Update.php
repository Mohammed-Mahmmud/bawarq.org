<?php

namespace App\Livewire\Dashboard\Pages\Tools;

use App\Http\Requests\Dashboard\ToolRequest;
use App\Models\Tool;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;
    protected $listeners = ['edit'];
    public $name, $description, $image, $tool;
    public function edit($id)
    {
        $this->tool = Tool::findOrFail($id);
        $this->name =  $this->tool->name;
        $this->description =  $this->tool->description;
        $this->dispatch('updateModalToggle');
    }
    public function rules()
    {
        return (new ToolRequest())->rules();
    }

    public function submit()
    {
        $data = $this->validate($this->rules());
        if ($this->image) {
            unlink($this->tool->image);
            $imageName = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('images', $imageName, 'public');
            $data['image'] = 'storage/images/' . $imageName;
        } else {
            unset($data['image']);
        }
        $this->tool->update($data);
        $this->dispatch('updateModalToggle');
        $this->dispatch('refreshTable')->to(View::class);
        $this->reset('name', 'description', 'image');
        toastr()->info('Data has been updated successfully!');
    }
    public function render()
    {
        return view('dashboard.pages.tools.update');
    }
}
