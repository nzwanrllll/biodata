<?php

use App\Http\Controllers\RuteController;
use App\Http\Controllers\BiodataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rute Tanpa MVC
Route::get('/rutetanpamvc', function () {
    return 'welcome';
});



// Rute Menggunakan VIEW
Route::get('/ruteview', function () {
    return view('ruteview');
});

// Rute Menggunakan View & Controller
Route::get('/rutecontroller', [RuteController::class, 'menampilkanData']);

// Rute Menggunakan View, Controller & model
Route::get('/rutemodel', [RuteController::class, 'menampilkanDataModel']);
Route::get('/rutemodel', [RuteController::class, 'menampilkanDataModel']);
                            
// Rute Biodata
Route::get('/Biodata', [BiodataController::class, 'menampilkanBiodata']);
                            

