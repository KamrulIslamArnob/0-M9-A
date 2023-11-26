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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ContactController;

// Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// About Me Page
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Projects Page
Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');

// Contact Page
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Other Routes if needed...
