<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index($slug = null)
    {
        if (isset($slug)) {
            return view('front.pages.index');
        }
    }
}
