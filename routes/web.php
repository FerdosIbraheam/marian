<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogController;
use App\Http\Controllers\myblogController;
use App\Http\Controllers\userloginController;

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
// Route::get('/show',[blogcontroller::class,'show'] );

// Route::post('/create',[blogcontroller::class,'create'] );

Route::get('myblog/',[myblogController::class,'index']);
Route::get('myblog/Create',[myblogController::class,'create']);
Route::post('myblog/Store',[myblogController::class,'store']);

Route::get('userlogin/',[userloginController::class,'index']);
Route::get('userlogin/Create',[userloginController::class,'Create']);
Route::post('userlogin/Store',[userloginController::class,'Store']);
Route::get('userlogin/login',[userloginController::class,'login']);
Route::post('userlogin/DoLogin',[userloginController::class,'DoLogin']);
