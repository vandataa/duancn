<?php

use App\Http\Controllers\ph20590;
use App\Http\Controllers\ProductsController;
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
Route::get('/',[ph20590::class ,'index']);
Route::get('/lienhe',[ph20590::class,'lienhe']);
Route::get('/ct/{id}',[ph20590::class,'lay1tt']);
Route::get('/hs',[ph20590::class ,'hocsinh']);
Route::get('/list-controller',[ProductsController::class ,'index']);

// Route::get('/', function () {
//     return view('welcome');
// });
