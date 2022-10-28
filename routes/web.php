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
Route::delete('compte/destroy/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('compte.destroy');

//-----------------------------ADRESSES-------------------------------
Route::resource('adresse', App\Http\Controllers\AdresseController::class)->only([
    'store', 'update','destroy']);;

//-----------------------------RANDONNEES-------------------------------
Route::resource('randonnee', App\Http\Controllers\RandonneeController::class);

//-----------------------------PHOTOS-------------------------------
Route::resource('photos', App\Http\Controllers\PhotoController::class);

//-----------------------------COMPTE RENDU -------------------------------
// Route::resource('compteRendu', App\Http\Controllers\CompteRenduController::class);

//-----------------------------DOCUMENTS-------------------------------
Route::resource('document', App\Http\Controllers\DocumentController::class)->only(['index',
    'store','destroy']);;

//-----------------------------CONTACT-------------------------------
Route::resource('contact', App\Http\Controllers\ContactController::class);

//-----------------------------ADMIN-------------------------------
Route::get('admin/index',[App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');

//-----------------------------NOTIFICATIONS-------------------------------
Route::resource('notification', App\Http\Controllers\NotificationController::class);

//-----------------------------ACTUALITES-------------------------------
Route::resource('actualite', App\Http\Controllers\ActualiteController::class);

Route::POST('reglementAccepte', [App\Http\Controllers\Auth\RegisterController::class,'reglementAccepte'])->name('reglementAccepte');

Route::get('NoticeJointe', [App\Http\Controllers\NoticeJointeController::class, 'NoticeJointe'])->name('NoticeJointe');







