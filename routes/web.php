<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

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
//     return view('activate');
// });
// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/dashboard', function () {
//     return view('dashboard');
// });
// Route::get('/overview', function () {
//     return view('overview');
// });
// Route::get('/companies', function () {
//     return view('companies');
// });
// Route::get('/companylist', function () {
//     return view('companylist');
// });

Route::get('/login',[CustomAuthController::class,'login']);
Route::get('/register',[CustomAuthController::class,'registration']);
Route::post('/register-user',[CustomAuthController::class,'registerUser'])->name('register-user');
