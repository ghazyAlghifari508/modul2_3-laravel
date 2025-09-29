<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\TubesController;

Route::get('/form', [DataController::class, 'form']);
Route::post('/proses', [DataController::class, 'proses']);

//Tubes

Route::get('/', function () {
    return view('welcome to annpundung!!');
});

Route::get('/about', function() {
    return view('about', ['deskripsi' => 'annpundung adalah aplikasi untuk mencegah pungli dan annpundung sendiri merupakan kepanjangan dari anti pungli bandung']);
});

Route::get('/home', function() {
    return "Halo ini adalah halaman home";
})-> name('home.page');


//TUBES

Route::get('/hello', function () {
    return ("hello, nama");
});

Route::get('/user/{name}', function($name) {
    return "nama saya : $name";
});

Route::get('/greet/{name?}', function($name = "Guest") {
    return "Hawlo, $name";
});

Route::get('/profile', function() {
    return view('profile');
});