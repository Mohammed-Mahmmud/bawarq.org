<?php

namespace App\Livewire\Dashboard\Pages\Emails;

use App\Models\Course;
use App\Models\Email;
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
        return view('dashboard.pages.emails.view', ['data' => Email::whereAny(['email'], 'like', '%' . $this->search . '%')->paginate(10)]);
    }
}
