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



Route::get('/admin', function () {
    return view('dashboard.admin_dashboard');
})->name('admin');

Route::get('/addcourses', function () {
    return view('dashboard.admin_add_courses_subjects');
})->name('addcourses');

Route::get('/account_management_student', function () {
    return view('dashboard.admin_account_management_student');
})->name('account_management_student');

Route::get('/account_management_teacher', function () {
    return view('dashboard.admin_account_management_teacher');
})->name('account_management_teacher');

Route::get('/account_management_change_password', function () {
    return view('dashboard.admin_account_management_change_password');
})->name('account_management_change_password');

Route::get('/pre_enrolled_students', function () {
    return view('dashboard.admin_pre_enrolled_students');
})->name('pre_enrolled_students');

Route::get('/admin_account', function () {
    return view('dashboard.admin_admin_account');
})->name('admin_account');

// end admin area

// student area

Route::get('/student', function () {
    return view('dashboard.student_dashboard');
})->name('student');

Route::get('/gradeviewer', function () {
    return view('dashboard.student_gradeviewer_dashboard');
})->name('gradeviewer');

Route::get('/studentaccount', function () {
    return view('dashboard.student_account_dashboard');
})->name('studentaccount');

// end student area

// teacher area

Route::get('/teacher', function () {
    return view('dashboard.teacher_dashboard');
})->name('teacher');

Route::get('/gradeinput', function () {
    return view('dashboard.teacher_gradeinput_dashboard');
})->name('gradeinput');

Route::get('/teacheraccount', function () {
    return view('dashboard.teacher_account_dashboard');
})->name('teacheraccount');

// end teacher area


Auth::routes();

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
