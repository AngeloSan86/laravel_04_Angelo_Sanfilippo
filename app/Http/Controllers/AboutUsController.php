<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    function aboutUs () {
        $arrayMembers =[
            ['role' => 'General Manager', 'name' => 'Mario Rossi', 'id' => '1'],
            ['role' => 'Ufficio vendite', 'name' => 'Pietro Gambadilegno', 'id' => '2'],
            ['role' => 'Addetto stampa', 'name' => 'Frank Abagnale', 'id' => '3'],
            ['role' => 'Responsabile pulizia bagni', 'name' => 'Mastro Lindo', 'id' => '4'],
        ];
        return view('chiSiamo', ['members' => $arrayMembers]);
    }
}
