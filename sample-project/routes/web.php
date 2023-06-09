<?php
namespace App\Http\Controller;

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HelloMiddleware;
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
route::get("hello","HelloController@index");
Route::post("hello","HElloController@post");



