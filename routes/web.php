<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Role\AdminController;
use App\Http\Controllers\ClassRoomController;
use App\Http\Controllers\CriticAndSuggestController;
use App\Http\Controllers\Role\HeadMasterController;
use App\Http\Controllers\Role\headRoomTeacherController;
use App\Http\Controllers\Role\HeadRoomTeacher;
use App\Http\Controllers\Role\StudentController;

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

// Authentication routes

Route::get('/login', [AuthenticateController::class, 'login'])->name('login');
Route::post('/login', [AuthenticateController::class, 'store'])->name('user.login');
Route::get('/register', [AuthenticateController::class, 'register'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('user.register');
Route::get('/logout', [AuthenticateController::class, 'destroy'])->name('user.logout');

// Critic routes 
Route::get('/kritik-dan-saran',  [CriticAndSuggestController::class, 'index'])->name('criticAndSuggest.index');
Route::post('/kritik-dan-saran', [CriticAndSuggestController::class, 'store'])->name('criticAndSuggest.store');


// Admin routes

Route::controller(AdminController::class)
    ->middleware(['auth', 'role:admin'])
    ->prefix('/dashboard/admin')
    ->group(function () {
        Route::get('/', 'index')->name('admin.index');
    });

// Student routes
Route::controller(StudentController::class)
    ->middleware(['auth', 'role:siswa'])
    ->prefix('/dashboard/student')
    ->group(function () {
        Route::get('/', 'index')->name('student.index');
    });



// head Room Teacher routes
Route::controller(headRoomTeacherController::class)
    ->middleware(['auth', 'role:walikelas'])
    ->prefix('/dashboard/headroom-teacher')
    ->group(function () {
        Route::get('/', 'index')->name('hrTeacher.index');

        // Report
        Route::get('/reports-waiting', 'reportWaiting')->name('hrTeacher.reportsWaiting');
        Route::get('/reports-on-progres', 'reportOnProgress')->name('hrTeacher.reportOnProgress');
        Route::get('/reports-success', 'reportSuccess')->name('hrTeacher.reportSuccess');
        Route::get('/reports/{id}', 'reportEdit')->name('hrTeacher.editReport');
        Route::patch('/reports/{id}', 'reportUpdate')->name('hrTeacher.reportUpdate');
        Route::get('/reports={reportId}', 'reportShow')->name('hrTeacher.reportShow');
        Route::get('/reports={reportId}/users={userId?}', 'reportUserShow')->name('hrTeacher.reportUserShow');

        // Student
        Route::get('/students', 'students')->name('hrTeacher.studentsIndex');
        Route::get('/students={id?}', 'studentShow')->name('hrTeacher.studentShow');
    });


// HeadMaster Routes
Route::controller(HeadMasterController::class)
    ->middleware(['auth', 'role:kepalaSekolah'])
    ->prefix('/dashboard/headmaster/')
    ->group(function () {
        Route::get('/', 'index')->name('headMaster.index');
        Route::get('/kritik-dan-saran', 'getAllcriticAndSuggest')->name('headMaster.getAllcriticAndSuggest');
    });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//ClassRoomRoute
Route::controller(ClassRoomController::class)
    ->group(function () {
        Route::get('/classroom', 'index')->name('classroom.index');
        Route::post('/classroom', 'store')->name('classroom.store');
        Route::get('/classroom/edit/{id}', 'edit')->name('classroom.edit');
        Route::put('/{id}', 'update')->name('classroom.update');
        Route::get('/classroom/show/{id}', 'show')->name('classroom.show');
        Route::delete('/{id}', 'destroy')->name('classroom.delete');
    });


// Reports Routes
Route::controller(ReportController::class)
    ->middleware(['auth'])
    ->prefix('report')
    ->group(function () {
        Route::get('/', 'index')->name('report.index');
        Route::get('/tambah', 'create')->name('report.create');
        Route::post('/', 'store')->name('report.store');
        Route::get('/edit/{id}', 'edit')->name('report.edit');
        Route::put('/{id}', 'update')->name('report.update');
        Route::get('/{id}', 'show')->name('report.show');
        Route::delete('/{id}', 'destroy')->name('report.delete');
    });


require __DIR__ . '/auth.php';
