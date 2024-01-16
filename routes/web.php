<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//custom routes
Route::get('/demo',function(){
    return view('demo');
});

Route::any('/test',function(){
    echo "Testing the route";
});

// Route::put('/test1',function(){
//     echo "Testing put";
// });

// Route::patch('/test2',function(){
//     echo "Testing patch";
// });

// Route::delete('/test3',function(){
//     echo "Testing delete";
// });
