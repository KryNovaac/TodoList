<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;



use App\Http\Controllers\TaskController;

Route::resource('tasks', TaskController::class);
Route::get('/', [PageController::class, 'home'])->name('home');