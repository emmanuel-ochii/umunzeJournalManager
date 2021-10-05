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

Route::get('/','UserController@index')->name('welcome');




Route::middleware(['middleware'=>'preventBackHistory'])->group(function () {

    Auth::routes();
});

Route::group(['prefix'=>'/', 'middleware'=>['auth','preventBackHistory']], function (){
    Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('uploadJournal','UserController@uploadJournal')->name('user.uploadJournal');
    Route::get('editProfile','UserController@editProfile')->name('user.editProfile');
    Route::resource('journal', JournalController::class);
});

Route::get('/journals','JournalController@index')->name('journals');
Route::get('/viewJournal','UserController@viewJournal')->name('user.viewJournal');
Route::get('/search','UserController@search')->name('user.search');
Route::get('/viewProfile','UserController@viewProfile')->name('user.viewProfile');
// Route::get('/listJournal','UserController@listJournal')->name('user.listJournal');
Route::get('/userJournals','UserController@userJournals')->name('user.userJournals');



Route::group(['prefix'=>'admin', 'middleware'=>['isAdminMiddleware','auth','preventBackHistory']], function () {
    Route::get('dashboard', [AdminController::class,'index'])->name('admin.dashboard');

});

Route::group(['prefix'=>'editor', 'middleware'=>['isEditorMiddleware','auth','preventBackHistory']], function () {
    Route::get('dashboard', [EditorController::class,'index'])->name('editor.dashboard');
    Route::get('/viewProfile',[EditorController::class,'viewProfile'])->name('editor.viewProfile');
    Route::get('/editProfile','EditorController@editProfile')->name('editor.editProfile');
    Route::get('/allJournals','EditorController@allJournal')->name('editor.allJournal');
    Route::get('/publishedJournals','EditorController@publishedJournal')->name('editor.publishedJournal');
    Route::get('/pendingJournals','EditorController@pendingJournal')->name('editor.pendingJournal');


});
