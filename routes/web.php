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

Route::get('/', [RestaurantController::class, 'index']);
Route::get('/categories', [RestaurantController::class, 'categories']);
Route::get('/add', [RestaurantController::class, 'add']);
Route::get('/search', [RestaurantController::class, 'search']);
Route::post("/add", [RestaurantController::class, 'add_restaurant']);
Route::get('/states/{cntry}', [RestaurantController::class, 'get_states']);
