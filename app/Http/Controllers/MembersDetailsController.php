<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembersDetailsController extends Controller
{
    function dettagliMembri($id) {

        $arrayMembers =[
            ['role' => 'General Manager', 'name' => 'Mario Rossi', 'id' => '1'],
            ['role' => 'Ufficio vendite', 'name' => 'Pietro Gambadilegno', 'id' => '2'],
            ['role' => 'Addetto stampa', 'name' => 'Frank Abagnale', 'id' => '3'],
            ['role' => 'Responsabile pulizia bagni', 'name' => 'Mastro Lindo', 'id' => '4'],
        ];
    
        foreach ($arrayMembers as $member) {
            if ($id == $member['id']) {
                return view('dettaglio', ['membro'=>$member]);
            }
        }
    
        
    }
}
