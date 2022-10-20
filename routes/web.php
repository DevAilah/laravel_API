<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [PagesController::class, 'index']);
//Route::view("index","pages.index");

Route::get('/members', [PagesController::class, 'members']);

Route::get('/about', [PagesController::class, 'about']);

Route::get('/contact', [PagesController::class, 'contact']);

Route::post('/login', [PagesController::class, 'login']);

Route::post('/register', [PagesController::class, 'register']);
Route::post('/register', [PagesController::class, 'insert']);
Route::view("register","pages.register");

Route::post("/users", [PagesController::class, 'users']);
Route::view("users","users")->middleware('protectedPage');       // route middleware

   // for group middleware
//Route::group(['middleware'=>['protectedPage']],function () {
    //Route::view("register","pages.register");
    //Route::view("users","users");
//});


