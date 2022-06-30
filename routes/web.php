<?php

use Illuminate\Support\Facades\Route;

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



Auth::routes();
//-----------------------------ACCUEIL-------------------------------
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//-----------------------------USER-------------------------------
Route::get('compte', [App\Http\Controllers\UserController::class, 'compte'])->name('compte');
Route::put('compte/update',  [App\Http\Controllers\UserController::class, 'update'])->name('compte.update');
Route::put('compte/updatePassword',  [App\Http\Controllers\UserController::class, 'updatePassword'])->name('compte.updatePassword');
Route::delete('user/destroy', [App\Http\Controllers\UserController::class, 'destroy'] )->name('user.destroy');

//-----------------------------ADRESSES-------------------------------
Route::resource('adresses', App\Http\Controllers\AdresseController::class);

//-----------------------------ACTIVITES-------------------------------
Route::resource('activites', App\Http\Controllers\ActiviteController::class);
//-----------------------------RANDONNEES-------------------------------
Route::resource('randonnees', App\Http\Controllers\ActiviteController::class);

//-----------------------------PHOTOS-------------------------------
Route::resource('photos', App\Http\Controllers\PhotoController::class);

//-----------------------------A PROPOS-------------------------------
Route::resource('a_propos', App\Http\Controllers\A_ProposController::class);

//-----------------------------CONTACT-------------------------------
Route::resource('contact', App\Http\Controllers\ContactController::class);

//-----------------------------REGLEMENT-------------------------------
Route::resource('reglement', App\Http\Controllers\ReglementController::class);

//-----------------------------ADMIN-------------------------------
Route::get('admin/index',[App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
