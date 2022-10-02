<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
        function tsubuyaki()
    {
        $tweet = ['今' => 'つぶやいたった'];

        return view('home',$tweet);
    }
}
