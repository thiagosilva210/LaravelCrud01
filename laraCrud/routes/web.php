<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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

Route::get('customer-list', [CustomerController::class, 'index']);
Route::get('add-customer', [CustomerController::class, 'addCustomer']);
Route::post('save-customer', [CustomerController::class, 'saveCustomer']);
Route::get('edit-customer/{id}', [CustomerController::class, 'editCustomer']);
Route::post('update-customer', [CustomerController::class, 'updateCustomer']);
Route::get('delete-customer/{id}', [CustomerController::class, 'deleteCustomer']);