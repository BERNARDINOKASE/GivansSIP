<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Role\AdminController;
use App\Http\Controllers\StudentController;

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

Route::get('/login', [AuthenticateController::class, 'login'])->name('login');
Route::post('/login', [AuthenticateController::class, 'store'])->name('user.login');
Route::get('/register', [AuthenticateController::class, 'register'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('user.register');
Route::get('/logout', [AuthenticateController::class, 'destroy'])->name('user.logout');

// Admin routes

Route::controller(AdminController::class)
    ->middleware(['auth', 'role:admin'])
    ->prefix('/dashboard/admin')
    ->group(function () {
        Route::get('/', 'index')->name('admin.index');
    });
Route::controller(StudentController::class)
    ->middleware(['auth', 'role:student'])
    ->prefix('/dashboard/student')
    ->group(function () {
        Route::get('/', 'index')->name('student.index');
    });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// Reports Routes
Route::controller(ReportController::class)
    ->middleware(['auth'])
    ->prefix('report')
    ->group(function () {
        Route::get('/', 'index')->name('report.index');
        Route::post('/', 'store')->name('report.store');
        Route::get('/edit/{id}', 'edit')->name('report.edit');
        Route::put('/{id}', 'update')->name('report.update');
        Route::get('/{id}', 'show')->name('report.show');
        Route::delete('/{id}', 'destroy')->name('report.delete');
    });

require __DIR__ . '/auth.php';
