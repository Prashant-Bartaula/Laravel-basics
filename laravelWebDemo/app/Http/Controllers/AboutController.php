<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function aboutIntroduction(){
        return view('about.about');
    }

    public function exMembers(){
        return view('');
    }
}
