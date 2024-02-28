<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\ProfileController;
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
// Route::post('/logout', [AuthenticateController::class, 'destroy']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Admin Routes 
// Route::middleware('role:admin')->group(function () {
//     return view('content.admin.index');
// })->name('admin.index');

//Offenses Routes
Route::get('/content/admin/offenses/index', function () {
    return view('content/admin/offenses/index');
});
Route::get('/content/admin/offenses/adding', function () {
    return view('content/admin/offenses/adding');
    //return "testing";
});

require __DIR__ . '/auth.php';
