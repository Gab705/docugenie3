<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocugenieController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DocugenieController::class, 'index'])->name('index');
Route::get('/geek', [DocugenieController::class,  'showGeek'])->name('geek');
Route::get('/contact', [DocugenieController::class, 'showContact'])->name('contact');
Route::get('/registration', [DocugenieController::class , 'showRegistration'])->name('registration');
Route::get('/correction', [DocugenieController::class, 'showCorrection'])->name('correction');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/showLogin', [AuthController::class, 'showLogin'])->name('showLogin');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/showPost', [DocugenieController::class, 'showPost'])->name('showPost');
Route::post('/poster', [DocugenieController::class, 'poster'])->name('poster');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/archives', [DocugenieController::class, 'showArchive'])->name('archives');
Route::get('/telecharger', [DocugenieController::class, 'showTelecharger'])->name('telecharger');
