<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Controllers\Controller;
use App\Http\Controllers\KharismaController;
use App\httpController\PostController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kharisma', function () {
    echo "Kharisma comel";
});

Route::get('/belajar', function () {
    echo '<h1>Hello World</h1>';
    echo '<p>Sedang belajar Laravel</p>';
});

Route::get('/siswa/rpl/kharisma', function () {
    echo '<h2 style="text-align: center"><u>Welcome to Laravel, Kharisma</ul></h2>';

});

Route::get('/guru', function () {
    return view('data_guru');
});

Route::get('/siswa', function () {
    return view('data_siswa');
});

Route::resource('/posts', \App\Http\Controllers\PostController::class);


Route::get('/home', function () {
    return view('home');
});

Route::get('/booking', function () {
    return view('booking');
});
Route::get('/contact', function (){
    return view('contact');
});

Route::get('/blog', function (){
    return view('blog');
});

Route::get('/special', function (){
    return view('special');
});

Route::get('/special', function () {
    return view('special');
});

Route::resource('/posts', \App\Http\Controllers\PostController::class);

Route::resource('/Admin',\App\Http\Controllers\KharismaController::class);
Route::get('/Admin',[KharismaController::class,'index']);
Route::get('/search', [App\Http\Controllers\KharismaController::class, 'search']);

// Route::get('/Admin/search', [KharismaController::class, 'search']);

Route::group(['middleware' => 'guest'], function() {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register.store');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login.store');
});

Route::group(['middleware' => 'auth'], function (){
     Route::get('/home1', [HomeController::class, 'index']);
    Route::delete('/logot', [AuthController::class, 'logout'])->name('logout');
});
