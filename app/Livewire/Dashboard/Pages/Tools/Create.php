<?php

namespace App\Livewire\Dashboard\Pages\Tools;

use App\Http\Requests\Dashboard\ToolRequest;
use App\Models\Tool;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $name, $description, $image;

    public function rules()
    {
        return (new ToolRequest())->rules();
    }
    public function submit()
    {
        $data = $this->validate($this->rules());
        $imageName = time() . '.' . $this->image->getClientOriginalExtension();
        $this->image->storeAs('images', $imageName, 'public');
        $data['image'] = 'storage/images/' . $imageName;
        Tool::create($data);
        $this->reset('name', 'description', 'image');
        $this->dispatch('createModalToggle');
        $this->dispatch('refreshTable')->to(View::class);
        toastr()->success('Data has been saved successfully!');
    }
    public function render()
    {
        return view('dashboard.pages.tools.create');
    }
}
