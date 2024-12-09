<?php

namespace App\View\Components\Front;

use App\Models\Email;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Emails extends Component
{
    /**
     * Create a new component instance.
     */
    public $emails;
    public function __construct()
    {
        $this->emails = Email::get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front.emails');
    }
}
