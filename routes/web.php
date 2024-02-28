<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Role\AdminController;
use Illuminate\Support\Facades\Route;

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
    return view('homepage');
});

Route::get('/dashboard/guest', function () {
    return view('content/guest/index');
});

Route::get('/dashboard/admin', function () {
    return view('content/admin/index');
});

Route::get('/dashboard/student', function () {
    return view('content/student/index');
});

// Authentication routes

Route::get('/login', [AuthenticateController::class, 'login']);
Route::post('/login', [AuthenticateController::class, 'store']);
Route::get('/register', [AuthenticateController::class, 'register']);
Route::post('/register', [RegisteredUserController::class, 'store']);
Route::get('/logout', [AuthenticateController::class, 'destroy'])->name('user.logout');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
