<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PendudukController;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/kelurahan', function () {
    return view('kelurahan_dashboard');
})->name('kelurahan_dashboard');
Route::get('/dinas', function () {
    return view('dinas_dashboard');
})->name('dinas_dashboard');
Route::get('/admin', function () {
    return view('admin_dashboard');
})->name('admin_dashboard');

Route::get('kelurahan/penduduk/create',[PendudukController::class, 'CreateView'])->name('penduduk_create');
Route::post('kelurahan/penduduk/create',[PendudukController::class, 'Create'])->name('penduduk_created');
Route::get('kelurahan/penduduk/update',[PendudukController::class, 'UpdateView'])->name('penduduk_update');
Route::post('kelurahan/penduduk/update',[PendudukController::class, 'Update'])->name('penduduk_updated');
Route::get('kelurahan/penduduk/delete',[PendudukController::class, 'Delete'])->name('penduduk_delete');
Route::get('kelurahan/penduduk/read',[PendudukController::class, 'Read'])->name('penduduk_read');

Route::get('admin/user/create',[UserController::class, 'CreateView'])->name('user_create');
Route::post('admin/user/create',[UserController::class, 'Create'])->name('user_created');
Route::get('admin/user/update',[UserController::class, 'UpdateView'])->name('user_update');
Route::post('admin/user/update',[UserController::class, 'Update'])->name('user_updated');
Route::get('admin/user/delete',[UserController::class, 'Delete'])->name('user_delete');
Route::get('admin/user/read',[UserController::class, 'Read'])->name('user_read');

Route::post('/logout',[LogoutController::class, 'store'])->name('logout');

// Route::get('/login',[LoginController::class, 'index'])->name('login');
// Route::post('/login',[LoginController::class, 'store']);

Route::get('/register',[RegisterController::class, 'index'])->name('register');
Route::post('/register',[RegisterController::class, 'store']);

Route::get('/posts', function () {
    return view('posts.index');
});