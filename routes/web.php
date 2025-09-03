<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $members = [
        ['name' => 'Dixie', 'route' => 'dixie'],
        // add more members here
    ];

    return view('welcome', compact('members'));
});

// Example member routes (each pointing to their own blade file)
Route::view('/dixie', 'members.dixie')->name('dixie');

