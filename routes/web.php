<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->name('dashboard');

Route::get('/add_courses_subjects', function () {
    return view('dashboard.add_courses_subjects');
})->name('add_courses_subjects');

Route::get('/student_account_management', function () {
    return view('dashboard.student_account_management');
})->name('student_account_management');

Route::get('/teacher_account_management', function () {
    return view('dashboard.teacher_account_management');
})->name('teacher_account_management');

Route::get('/change_password_account_management', function () {
    return view('dashboard.change_password_account_management');
})->name('change_password_account_management');

Route::get('/pre_enrolled_students', function () {
    return view('dashboard.pre_enrolled_students');
})->name('pre_enrolled_students');

Route::get('/admin_account', function () {
    return view('dashboard.admin_account');
})->name('admin_account');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
