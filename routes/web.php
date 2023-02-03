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

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/admin', function () {
    return view('dashboard.admin_dashboard');
})->name('admin');


Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->name('dashboard');

Route::get('/add_courses_sections', function () {
    return view('dashboard.admin_add_courses_sections');
})->name('add_courses_sections');
 
Route::get('/add_subjects', function () {
    return view('dashboard.admin_add_subjects');
})->name('add_subjects');

Route::get('/account_management', function () {
    return view('dashboard.admin_account_management');
})->name('account_management');

// Route::get('/teacher_account_management', function () {
//     return view('dashboard.admin_change_password_account_management');
// })->name('teacher_account_management');

Route::get('/change_password_account_management', function () {
    return view('dashboard.admin_change_password_account_management');
})->name('change_password_account_management');


Route::get('/pre_enroll', function () {
    return view('dashboard.admin_pre_enroll');
})->name('pre_enroll');


Route::get('/adminaccount', function () {
    return view('dashboard.admin_account_dashboard');
})->name('adminaccount');

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


Route::get('/studentchangepassword', function () {
    return view('dashboard.student_account_change_password');
})->name('studentchangepassword');


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


Route::get('/teacherchangepassword', function () {
    return view('dashboard.teacher_account_change_password');
})->name('teacherchangepassword');


// end teacher area


Auth::routes();

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');



Route::get('/login', function () {
    return view('login');
});




