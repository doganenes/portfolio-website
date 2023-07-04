<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'contact'])->name('contact');
Route::post('/send-message', [\App\Http\Controllers\ContactController::class, 'sendEmail'])->name('contact.send');
