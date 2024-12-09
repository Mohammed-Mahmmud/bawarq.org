<?php

namespace App\Livewire\Front\Component;

use App\Models\Setting;
use Livewire\Component;

class About extends Component
{

    public function render()
    {
        return view('front.component.about',['data'=>Setting::first()]);
    }
}
