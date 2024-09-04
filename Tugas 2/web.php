<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rute GET sederhana
Route::get('/hello',function(){
    return 'Hello, World!';
});

// Rute dengan parameter
Route::get('user/{id}', function($id){
    return "User ID: " . $id;
});

// Rute dengan parameter opsional
Route::get('/user/{name?}', function ($name = 'Guest'){
    return "Hello, " . $name;
});

// Rute dengan nama
Route::get('/profile', function (){
    return 'This is the profile page.';
})->name('profile');
// Menggunakan rute bernama untuk pengalihan
Route::get('/redirect-to-profile', function (){
    return redirect()->route('profile');
});

// Rute Grup
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function() {
        return 'Admin Dashboard';
    });

    Route::get('/profile', function() {
        return 'Admin Profile';
    });
});

//Middleware pada Rute
Route::get('/dashboard', function () {
    return 'Welcome to your dashboard!';
})->middleware('auth');

// Rute Sumber Daya
Route::resource('posts', 'PostController');

Route::get('user/{angka1}/{angka2}', function($num1, $num2){
    return "Hasil Penjumlahan " . $num1 . "+" . $num2 . "=" . $num1 + $num2;
});

