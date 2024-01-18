<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CustomerController;
use App\Models\Customer;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DemoController::class, 'index']);
Route::get('/about', [DemoController::class, 'about']);
Route::get('/courses', SingleActionController::class);
// Route::resource('/photo', PhotoController::class);

Route::get('/register', [RegistrationController::class, 'index']);
Route::post('/register', [RegistrationController::class, 'register'])->name('register.post');

Route::get('/customer/create', [CustomerController::class, 'create']);
Route::get('/customer/view', [CustomerController::class, 'view']);
Route::post('/customer', [CustomerController::class, 'store'])->name('store.post');


// Route::get('/customer', function(){
//     $customers = Customer::all();
//     echo "<pre>";
//     print_r($customers->toArray());
// });