<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AgencyController;

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
Route::get('collection/new-collection', function () { return view('pages.collection.newCollection'); });
Route::get('collection/vendor-collection', function () { return view('pages.collection.vendor'); });
Route::get('collection/pending', function () { return view('pages.collection.pending'); });
Route::get('collection/total-collection', function () { return view('pages.collection.total'); });
Route::get('collection/agency-collection', function () { return view('pages.collection.agency'); });

// config settings
Route::resource('settings/agency', AgencyController::class );
Route::get('settings/revenue-items', function () { return view('pages.config.heads'); });
Route::get('settings/settings', function () { return view('pages.config.settings'); });

// vendors and users
Route::get('vendor/vendor', function () { return view('pages.vendor'); });
Route::get('vendor/fund', function () { return view('pages.wallet.fund'); });
Route::get('vendor/wallets', function () { return view('pages.wallet.wallets'); });
// Route::get('vendor/logout', function () { return view('pages.wallet.fund'); });



Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
