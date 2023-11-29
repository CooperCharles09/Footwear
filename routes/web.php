<?php

use App\Http\Controllers\PageCallingController;
use App\Http\Controllers\RegDatabaseOperationController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//Main Pages calling routes
Route::get('/', [PageCallingController::class, 'LogInPage'])->name('LogIn');
Route::get('Regestration', [PageCallingController::class, 'RegestrationPage'])->name('Regestration');


//Regestration Page database operation Route
Route::post('RegDataSave', [RegDatabaseOperationController::class, 'RegDataSave'])->name('RegDataSave');
Route::get('LogInProcess', [RegDatabaseOperationController::class, 'LogInProcess'])->name('LogInProcess');


Route::group(['middleware' => 'LogInMiddleware'], function () {

    Route::get('Home', [PageCallingController::class, 'HomePage'])->name('Home');
    Route::get('About', [PageCallingController::class, 'AboutPage'])->name('About');
    Route::get('Shop', [PageCallingController::class, 'ShopPage'])->name('Shop');
    Route::get('Contact', [PageCallingController::class, 'ContactPage'])->name('Contact');

    Route::get('Profile', [PageCallingController::class, 'ProfilePage'])->name('Profile');
    Route::get('Cart', [PageCallingController::class, 'CartPage'])->name('Cart');
    Route::get('Update{id}', [PageCallingController::class, 'UpdatePage'])->name('Update');
    Route::post('UpdateDataStore{id}', [RegDatabaseOperationController::class, 'UpdateDataSave'])->name('UpdateDataSave');


    //Regestration Page database operation Route
    Route::post('ContactDataSave', [RegDatabaseOperationController::class, 'ContactDataSave'])->name('ContactDataSave');

    Route::get('LogOutProcess', [RegDatabaseOperationController::class, 'LogOutProcess'])->name('LogOutProcess');
    Route::get('DeleteAccount{id}', [RegDatabaseOperationController::class, 'DeleteAccount'])->name('DeleteAccount');
});
