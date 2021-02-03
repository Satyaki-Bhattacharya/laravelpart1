<?php
use App\Http\Controllers\login;
use Illuminate\Support\Facades\Route;
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
Route::view("/",'home');
Route::view("map",'map');
Route::view("about",'about');
Route::view("signup",'signup');
Route::view("login",'login');
Route::post('formSubmit',[login::class,'index']); 
Route::view("website",'website');
// Route::view("Forgot password","home");