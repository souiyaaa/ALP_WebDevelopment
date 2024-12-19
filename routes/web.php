<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProjectController::class, 'indexCompetition'])->name('home');
Route::get('/competition', [ProjectController::class, 'showCategory'])->name('competition');
Route::post('/register', [ProjectController::class, 'register'])->name('register');

// Route::get('/', function () {
//     return view('home',[
//         'title' => 'Home'
//     ]);
// });

// Route::get('/competition', function () {
//     return view('competition',[
//         'title' => 'Competition'
//     ]);
// });

Route::get('/result', function () {
    return view('result');
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/register', function () {
    return view('register');
});


Route::get('/login', function () {
    return view('login');
});

