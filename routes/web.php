<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\adminsController;
use App\Http\Controllers\StationsController;
  


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


Route::get('home/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('pages.index');
});
 Route::get('/main',function () {
    return view('login');
 });

/*Route::get('/users', [usersController::class,'index']);
Route::get('/add', [usersController::class,'create']);*/

Route::resource('users', userController::class);
Route::resource('Admins', adminsController::class);
Route::resource('Stations', StationsController::class);
// Route::get('/users', function () {
//     return view('users.index');
// });


