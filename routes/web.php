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
    return view('landing');
});
Route::get('/dashboard', function () {
    return view('landing');
});

// first links block
Route::get('/new-collection', function () { return view('pages.collection.newCollection'); });
Route::get('/vendor-collection', function () { return view('pages.collection.vendor'); });
Route::get('/pending', function () { return view('pages.collection.pending'); });
Route::get('/total-collection', function () { return view('pages.collection.total'); });
Route::get('/agency-collection', function () { return view('pages.collection.agency'); });

// config settings
Route::get('/agency', function () { return view('pages.config.agency'); });
Route::get('/revenue-heads', function () { return view('pages.config.heads'); });
Route::get('/settings', function () { return view('pages.config.settings'); });

// vendors and users
Route::get('/vendor', function () { return view('pages.vendor'); });
Route::get('/fund', function () { return view('pages.wallet.fund'); });



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
