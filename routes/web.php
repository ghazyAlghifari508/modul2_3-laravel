<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\MahasiswaController;

Route::get('/form_db', [MahasiswaController::class, 'form_db']);
Route::post('/simpan', [MahasiswaController::class, 'simpan']);
Route::get('/daftar-mahasiswa', [MahasiswaController::class, 'daftar']);


Route::get('/students', [StudentsController::class, 'index'])->name('students.index');

Route::get('/form', [FormController::class, 'form']);
Route::post('/proses', [FormController::class, 'proses']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function() {
    return ('Hello, Gojel');
});

Route::get('/user/{name}', function($name) {
    return "Nama Saya $name";
});

Route::get('/greet/{name?}', function($name = "Guest") {
    return "Haloo coyyy, Saya $name";
});

Route::get('/profile', function() {
    return view("profile");
});

Route::get('/about', function() {
    return view('about', ['nama' => 'Gojelino']);
});

Route::get('/home', function() {
    return 'Halo ini adalah halaman home page';
})->name('home.page');