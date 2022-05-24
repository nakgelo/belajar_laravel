<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiswaController;

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



// Data siswa
//Route::get('/siswa', function () {
  //  return view('siswa.index', ['siswa' => App\Siswa::all()]);
//});

//EDIT
//Route::post('/siswa/update', function (){
    //return view('siswa.edit');
//});


// Awalan
Route::get('/', function () {
    return view('welcome');
});

// Profile
Route::get('/profile', function () {
    return view('siswa.profile', ['user' => Auth::User()]);
})->middleware(['auth'])->name('profile');

// Lists
Route::resource('siswa', SiswaController::class );

// Create maybe??
//Route::post('/siswa/store', [SiswaController::class, 'store']);

// Delete
//Route::get('/siswa/delete{id}', 'SiswaController@destroy');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

