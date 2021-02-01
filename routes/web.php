<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;

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
//    return view('welcome');
// });

Route::get('/',[RestaurantController::class,'index']);
Route::get('/list',[RestaurantController::class,'list']);
Route::get('/add',[RestaurantController::class,'add']);
Route::post("/add",[RestaurantController::class,'add_restaurant']);
