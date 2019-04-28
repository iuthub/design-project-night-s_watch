<?php

namespace Chatty\Http\Controllers;

class AboutController extends Controller
{
    public function about()
    {
        return view('layouts.about');
    }
}
