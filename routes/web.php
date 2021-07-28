<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectController;


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


// Route::resource('projects',ProjectController::class);

// Route::get('projects',[ProjectController::class,'index'])->name('projects.index');

// Route::post('projects',[ProjectController::class,'store'])->name('projects.store');

// Route::get('projects/create',[ProjectController::class,'create'])->name('projects.create');

// Route::resource('test','TaskController');

// Route::view('/test','ToDoList.create');

 // Route::resource('contact','ContactController');

 // Route::resource('photo','PhotoController');

Route::get('get-data','ContactController@showView')->name('show.view');

// Route::get('get-data','ContactController@Index')->name('show.view');

Route::post('get-data','ContactController@store')->name('get.data');

// Route::post('get-data','ContactController@search')->name('get.data');

// Route::post('get-data','ContactController@store')->name('get.data');

// Route::get('edit-data','ContactController@edit')->name('edit.data');

// Route::post('edit-data','ContactController@edit')->name('edit.data');
