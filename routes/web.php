<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $title = 'Home page!';
    return view('welcome', ['titolo'=> $title]);
})->name('home');

Route::get('/chi-siamo', function () {
    $arrayMembers =[
        ['role' => 'General Manager', 'name' => 'Mario Rossi', 'id' => '1'],
        ['role' => 'Ufficio vendite', 'name' => 'Pietro Gambadilegno', 'id' => '2'],
        ['role' => 'Addetto stampa', 'name' => 'Frank Abagnale', 'id' => '3'],
        ['role' => 'Responsabile pulizia bagni', 'name' => 'Mastro Lindo', 'id' => '4'],
    ];
    return view('chiSiamo', ['members' => $arrayMembers]);
})->name('about');

Route::get('/servizi', function () {
    return view('servizi');
})->name('services');

Route::get('/dettaglio/{id}', function ($id) {

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

    
})->name('details');