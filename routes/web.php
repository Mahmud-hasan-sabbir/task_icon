<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class, ('index')])->name('home');
Route::get('/about', [WelcomeController::class, ('about')])->name('about');
Route::get('/contact', [WelcomeController::class, ('contact')])->name('contact');


Route::post('/store', [WelcomeController::class, 'SaveData'])->name('store');
Route::get('/edit/{id}', [WelcomeController::class, 'Edit'])->name('edit');
Route::post('/update-contact/{id}', [WelcomeController::class, 'updatdeContact'])->name('update-contact');
Route::get('/delete/{id}', [WelcomeController::class, 'updateDelete'])->name('delete');
Route::get('/register', [WelcomeController::class, 'register'])->name('register');
Route::post('/sign-up', [WelcomeController::class, 'signUp'])->name('sign-up');
