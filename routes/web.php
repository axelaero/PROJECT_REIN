<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('auth.login');
});
Route::post('/',[UserController::class, 'Login'])->name('login');
Route::get('/admin', function () {
    return view('dashboard_admin');
})->name('admin');
Route::get('/dinas', function () {
    return view('dashboard_dinas');
})->name('dinas');
Route::get('/kelurahan', function () {
    return view('dashboard_kelurahan');
})->name('kelurahan');
// Route::get('/dinas',[UserController::class, 'dinas'])->name('dinas');
// Route::get('/kecamatan',[UserController::class, 'kecamatan'])->name('kecamatan');


Route::get('/dashboard',[DashboardController::class, 'index'])
    ->name('dashboard');

Route::post('/logout',[LogoutController::class, 'store'])->name('logout');

// Route::get('/login',[LoginController::class, 'index'])->name('login');
// Route::post('/login',[LoginController::class, 'store']);

Route::get('/register',[RegisterController::class, 'index'])->name('register');
Route::post('/register',[RegisterController::class, 'store']);

Route::get('/posts', function () {
    return view('posts.index');
});