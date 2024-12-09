<?php

namespace App\Livewire\Dashboard\Pages\Tools;

use App\Models\Tool;
use Livewire\Component;
use Livewire\WithPagination;

class View extends Component
{
    protected $listeners = ['refreshTable' => '$refresh'];
    use WithPagination;
    public $search;
    protected $queryString = [
        'search' => ['except' => '', 'as' => 's'],
        'page' => ['as' => 'p'],
    ];
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('dashboard.pages.tools.view', ['data' => Tool::whereAny(['name', 'description'], 'like', '%' . $this->search . '%')->paginate(10)]);
    }
}
