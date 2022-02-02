<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Artisan;
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


Route::get('/readers', function () { return view('information/readers'); })->name('readers');

Route::get('/authors', function () { return view('information/authors'); })->name('authors');

Route::get('/librarians', function () { return view('information/librarians'); })->name('librarians');


Route::get('/', 'UserController@index')->name('welcome');


Route::middleware(['middleware' => 'preventBackHistory'])->group(function () {

    Auth::routes();
});

// Authenticated User Route View Begins

Route::group(['prefix' => '/', 'middleware' => ['auth', 'preventBackHistory']], function () {
    Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('uploadJournal', 'UserController@uploadJournal')->name('user.uploadJournal');
    Route::get('editProfile', 'UserController@editProfile')->name('user.editProfile');
    Route::get('/userJournals', 'UserController@userJournals')->name('userJournals');
    // Route::resource('journal', JournalController::class);
    Route::get('/journal', 'JournalController@index')->name('journal.index');
    Route::get('/journal/create', 'JournalController@create')->name('journal.create');
    Route::post('/journal/insert', 'JournalController@store')->name('journal.store');
    Route::get('/journal/edit/{id}', 'JournalController@edit')->name('journal.edit');
    Route::post('/journal/update/{id}', 'JournalController@update')->name('journal.update');
    Route::get('/journal/delete/{id}', 'JournalController@destroy')->name('journal.delete');
    Route::get('/manageJournal', 'JournalController@manageJournal')->name('manageJournal');

    Route::post('/storeComment/{slug}/{id}', 'JournalController@storeComment')->name('comment.store');
});

// Authenticated User Route View Ends



// General/Guest Route View Begins

Route::get('/journal/{slug}/{id}', 'JournalController@showSingleJournal')->name('journal.show');
// Route::get('/category/{slug}/{id}',[HomeController::class,'category']);
Route::get('/category/{slug}/{id}', 'JournalController@category');
Route::get('/search/{search}', 'UserController@search')->name('user.search');
Route::get('/viewProfile', 'UserController@viewProfile')->name('user.viewProfile');
Route::get('/listJournal', 'UserController@listJournal')->name('user.listJournal');
Route::get('/listCategory', 'UserController@listCategory')->name('user.listCategory');
Route::get('/userJournals', 'UserController@userJournals')->name('user.userJournals');

Route::get('downloadFile', 'JournalController@downloadFile');
Route::get('/download/{journal}', 'JournalController@download');

// General/Guest Route View Begins



// EDITOR ROUTES BEGINS
Route::group(['prefix' => 'editor', 'middleware' => ['isEditorMiddleware', 'auth', 'preventBackHistory']], function () {
    Route::get('dashboard', [EditorController::class, 'index'])->name('editor.dashboard');
    Route::get('/viewProfile', [EditorController::class, 'viewProfile'])->name('editor.viewProfile');
    Route::get('/editProfile', 'EditorController@editProfile')->name('editor.editProfile');
    Route::get('/allJournals', 'EditorController@allJournal')->name('editor.allJournal');
    Route::get('/publishedJournals', 'EditorController@publishedJournal')->name('editor.publishedJournal');
    Route::get('/pendingJournals', 'EditorController@pendingJournal')->name('editor.pendingJournal');
    Route::get('/rejectedJournals', 'EditorController@rejectedJournal')->name('editor.rejectedJournal');
});
// EDITOR ROUTES ENDS



// ADMIN ROUTES BEGINS
Route::group(['prefix' => 'admin', 'middleware' => ['isAdminMiddleware', 'auth', 'preventBackHistory']], function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/viewProfile', 'AdminController@viewProfile')->name('admin.profile');
    Route::resource('category', CategoryController::class);
    Route::get('/allJournals', 'AdminController@allJournalAdmin')->name('admin.allJournal');
    Route::get('/journalStatus', 'JournalController@journalStatus')->name('journalStatus');
    // Route::get('/publishedJournals','AdminController@publishedJournal')->name('admin.publishedJournal');
    // Route::get('/pendingJournals','AdminController@pendingJournal')->name('admin.pendingJournal');
    // Route::get('/rejectedJournals','AdminController@rejectedJournal')->name('admin.rejectedJournal');
    // Route::get('/clear-cache', function () {
    //     $exitCode = Artisan::call('cache:clear');
    //     return "Cache cleared";
    // });
    // Route::get('/clear-cache-all', function () {
    //     Artisan::call('cache:clear');

    //     dd("Cache Clear All");
    // });
    // Route::get('/optimize', 'AdminController@optimize');

    // Route::get('/clear', 'AdminController@clear');
});
// ADMIN ROUTES BEGINS
