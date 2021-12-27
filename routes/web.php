<?php

use App\Http\Controllers\DepartmentController;
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
    Route::get('/', [FacultyController::class, 'index'])->name('faculty.index');
    Route::get('/{faculty}', [FacultyController::class, 'show'])->name('faculty.show');
});

Route::group(['prefix' => 'department'], function () {
    Route::get('/', [DepartmentController::class, 'index'])->name('department.index');
    Route::get('/{department}', [DepartmentController::class, 'show'])->name('department.show');
});
