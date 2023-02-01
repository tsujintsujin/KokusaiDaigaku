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
    return view('landing');
});

Route::get('/academics', function () {
    return view('academics');
})->name('academics');

Route::get('/admission', function () {
    return view('admission');
})->name('admission');

Route::get('/student_services', function () {
    return view('student_services');
})->name('student_services');

Route::get('/about', function () {
    return view('about');
})->name('about');

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

Auth::routes();

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
