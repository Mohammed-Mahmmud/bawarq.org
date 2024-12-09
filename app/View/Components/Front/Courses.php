<?php

namespace App\View\Components\Front;

use App\Models\Course;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Courses extends Component
{
    /**
     * Create a new component instance.
     */
    public $courses;
    public function __construct()
    {
        $this->courses = Course::paginate(6);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front.courses');
    }
}
