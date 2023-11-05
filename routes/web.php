<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Jambasangsang\Helper;
use Spatie\Permission\Models\Role;

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
  return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::middleware('auth')->group(function () {
  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
  Route::prefix('human_resource')->group(function () {
    Route::view('/users', 'backend.admins.users.index')->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/edit/{user}', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/update/{user}', [UserController::class, 'update'])->name('users.update');
    foreach (Helper::getRoles() as $role) {
      Route::view(Str::lower($role->name) ?? '', 'backend.admins.users.index')->name('users.', Str::lower($role->name) ?? '');
      // Route::get(Str::lower($role->name) ?? 'users', [UserController::class, 'index'])->name('users.' .Str::lower($role->name) ?? 'index');
    }
  });
});
