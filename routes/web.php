<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function() {
    return view('mahasiswa.home');
})->name('home');

Route::get('/profile', function() {
    $name = "I Kadek Siwa Sathyaprilia";
    return view('mahasiswa.profile')->with(compact('name'));
})->name('profile');

Route::get('/work', function() {
    return view('mahasiswa.work');
})->name('work');