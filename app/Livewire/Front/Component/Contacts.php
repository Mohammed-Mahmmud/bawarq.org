<?php

namespace App\Livewire\Front\Component;

use App\Models\Email;
use Livewire\Component;

class Contacts extends Component
{
    public function render()
    {
        return view('front.component.contacts',['data'=>Email::get()]);
    }
}
