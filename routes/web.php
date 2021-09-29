<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EditorController;

use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/uploadJournal','UserController@uploadJournal')->name('user.uploadJournal');
Route::get('/viewJournal','UserController@viewJournal')->name('user.viewJournal');
Route::get('/search','UserController@search')->name('user.search');
Route::get('/viewProfile','UserController@viewProfile')->name('user.viewProfile');


Route::middleware(['middleware'=>'preventBackHistory'])->group(function () {

    Auth::routes();
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix'=>'admin', 'middleware'=>['isAdminMiddleware','auth','preventBackHistory']], function () {
    Route::get('dashboard', [AdminController::class,'index'])->name('admin.dashboard');

});

Route::group(['prefix'=>'editor', 'middleware'=>['isEditorMiddleware','auth','preventBackHistory']], function () {
    Route::get('dashboard', [EditorController::class,'index'])->name('editor.dashboard');

});
