<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Project2Controller;
use App\Http\Controllers\Project3Controller;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectsController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'lihat']);

Route::get('/projects', [ProjectsController::class, 'tampil']);

Route::get('/projects/{id}', [ProjectController::class, 'muncul']);

Route::get('/contact', [ContactController::class, 'show']);

Route::get('/project2', [Project2Controller::class, 'ada']);

Route::get('/project3', [Project3Controller::class, 'ini']);
