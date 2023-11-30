<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

// Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');



// // Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('/register', 'Auth\RegisterController@register');

Route::get('/', function () {
     return view('welcome');
});

Route::group(['middleware'=>'guest'],function(){
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('registerPost');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware'=>'auth'],function(){
Route::get('/home', [HomeController::class, 'index']);
Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});
// Route:: prefix('blog')->group(function(){
// Route::get('index', [profilecontroller::class, 'index'])->name('blog.index');
// Route::get('/register', [RegisterController::class, 'register']);
// Route::POST('/login', 'LoginController@login')->name('login');
// });
// Route:: prefix('blog')->group(function(){
// Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('/login', 'Auth\LoginController@login');

// Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('/register', 'Auth\RegisterController@register');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// });
// // Route::get('/index', function () {
// //   return view('blog.index');
// })->name('login');
// Route::POST('/login', function () {
//   return view('home');
// })->middleware(['auth', 'varified'])->name('home');

// Route::get('/login', function () {
//   return view('blog.login');
// })->name('login');

// Route::get('/register', function () {
//   return view('blog.register');
// })->name('register');
// Route::POST('/register', function () {
//   return view('blog.login');
// });

