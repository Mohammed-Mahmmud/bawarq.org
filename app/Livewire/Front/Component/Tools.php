<?php

namespace App\Livewire\Front\Component;

use App\Models\Tool;
use Livewire\Component;

class Tools extends Component
{

    public function render()
    {
        return view('front.component.tools',['tools'=>Tool::get()]);
    }
}
