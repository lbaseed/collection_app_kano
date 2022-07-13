<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;

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


Route::group(['middleware' => ['auth']], function () {

    Route::get('/', [DashboardController::class, 'index'] );
    Route::get('/dashboard', [DashboardController::class, 'index']);


    // if(Auth::user()->user_type=="manager"){
            // create new policy
        Route::get('collection/new-collection/create', [PolicyController::class, 'create'])->name('bills');
        Route::post('collection/new-collection/create', [PolicyController::class, 'store'])->name('new_insurance');
        Route::get('collection/new-policy/{id}', [TransactionController::class, 'new_policy'])->name('new_policy');
    // }elseif(Auth::user()->user_type=="vendor"){
    
        // create new policy
        Route::get('collection/new-collection/create', [PolicyController::class, 'create'])->name('bills');
        Route::post('collection/new-collection/create', [PolicyController::class, 'store'])->name('new_insurance');
        Route::get('collection/new-policy/{id}', [TransactionController::class, 'new_policy'])->name('new_policy');
    // }

    // renew policy
        Route::get('collection/renew', [PolicyController::class, "renew"]);
        Route::post('collection/renew/search', [PolicyController::class, "searchPolicy"])->name("search_policy");
        Route::post('collection/renew/process', [PolicyController::class, "processRenew"])->name("renew_insurance");

    // get vendor generated policies
        Route::get('collection/vendor-collection', [TransactionController::class, 'vendor_collection'])->name('vendor_collection');
        Route::post('collection/vendor-collection', [TransactionController::class, 'vendor_transactions'])->name('vendor_transactions');

    // get pinding polcies
        Route::get('collection/pending', [PolicyController::class, 'pending'])->name("pending");
        Route::post('collection/pending', [PolicyController::class, 'pending_bills'])->name("pending_bills");

    // fetch total revenue over a date range
        Route::get('collection/total-collection', [TransactionController::class, "total_revenue"])->name("reports");
        Route::post('collection/total-collection', [TransactionController::class, "total_transaction"])->name("trans_fetch");

    // vendors and users
        Route::resource('vendor', UserController::class);
        
    

});