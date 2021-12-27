<?php

use App\Http\Controllers\FacultyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::group(['middleware' => 'sanctum'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});

Route::group(['prefix' => 'faculty'], function () {
    Route::get('/', [FacultyController::class, 'index']);
});
