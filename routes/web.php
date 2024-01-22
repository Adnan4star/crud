<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\IndexController;
use App\Models\Customer;
use Illuminate\Http\Request;

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
Route::get('/customer/delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');
Route::get('/customer/restore/{id}', [CustomerController::class, 'restore'])->name('customer.restore');
Route::get('/customer/force-delete/{id}', [CustomerController::class, 'forceDelete'])->name('customer.force-delete');
Route::get('/customer/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
Route::post('/customer/update/{id}', [CustomerController::class, 'update'])->name('customer.update');
Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::get('/customer/view', [CustomerController::class, 'view']);
Route::get('/customer/trash', [CustomerController::class, 'trash']);
Route::post('/customer', [CustomerController::class, 'store'])->name('store.post');

Route::get('/data',[IndexController::class, 'index']);

//accessing session data
Route::get('get-all-session', function(){
    $session = session()->all();
    p($session);
});
//setting session data
Route::get('set-session', function(Request $request){
    $request->session()->put('user_name', 'Rehan');
    $request->session()->put('user_id', '123');
    return redirect('get-all-session');
});
//destroy session
Route::get('destroy-session', function(){
    session()->forget(['user_name','user_id']);
    return redirect('get-all-session');
});