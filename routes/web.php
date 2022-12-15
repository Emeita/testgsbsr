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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('home');
});

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
;

Route::get('/land', function () {
    return view('land');
})->name('land');

Route::get('/lead', function () {
    return view('leaderboard');
});
Route::get('/change', function () {
    return view('change');
});

Route::get('/mate', function () {
    return view('mate');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pertanyaan', [App\Http\Controllers\QuestionController::class, 'index'])->name('question.index');
Route::post('/quiz', [App\Http\Controllers\ResultController::class, 'store'])->name('result.store');
