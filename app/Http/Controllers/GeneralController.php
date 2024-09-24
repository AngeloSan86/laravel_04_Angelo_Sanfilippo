<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function homepage () {
        $title = 'Home page!';
        return view('welcome', ['titolo'=> $title]);
    }

}
