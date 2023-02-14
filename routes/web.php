<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CourseController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Admin_Course;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminHome;
use App\Models\Course;
use App\Models\Student;
use PDF as PDf;

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

//navbar routes
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


//admin routes
Route::get('/admin', function () {
    return view('dashboard.admin_dashboard');
})->name('admin');

Route::get('/sections', function () {
    return view('dashboard.admin_section');
})->name('sections');

Route::get('/subjects', function () {
    return view('dashboard.admin_subject');
})->name('subjects');

Route::get('/student_management', function () {
    return view('dashboard.admin_student_management');
})->name('student_management');

Route::get('/teacher_management', function () {
    return view('dashboard.admin_teacher_management');
})->name('teacher_management');

Route::get('/assign_subject', function () {
    return view('dashboard.admin_assign_subject');
})->name('assign_subject');





Route::get('/archive', function () {
    return view('dashboard.admin_archive');
})->name('archive');

Route::get('/change_password_account_management', function () {
    return view('dashboard.admin_change_password_account_management');
})->name('change_password_account_management');


Route::get('/pre_enroll', function () {
    return view('dashboard.admin_pre_enroll');
})->name('pre_enroll');


Route::get('/adminaccount', function () {
    return view('dashboard.admin_account_setting');
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



//course routes 
Route::post('/createcourse', [CourseController::class, 'create'])->name('createcourse');
// Route::get('/admin_course', [CourseController::class, 'index'])->name('indexcourses');
Route::get('/courses', [CourseController::class, 'index'])->name('courses');

// subject routes
Route::post('/createsubject', [SubjectController::class, 'create'])->name('createsubject');

//section routes
Route::post('/createsection', [SectionController::class, 'create'])->name('createsection');

//student routes
Route::post('/createstudent', [StudentController::class, 'create'])->name('createstudent');


Route::get('/admin', [AdminHome::class, 'admin'])->name('admin');



Route::get('/cal', function () {
    return view('dashboard.cal');
})->name('cal');


Route::get('/generate-pdf/{id}', function ($id) {
    $student_data = Student::where('id', $id)->first();
    $course_id =  $student_data->course_id;
    $course = Course::where('id', $course_id)->first();

    $studentCourse = $course->name;
    $data = [
        'students' => $student_data,
        'studentCourse' => $studentCourse,
    ];

    $pdf = PDF::loadView('livewire.studentPDF', $data);
    $lastname = $student_data->last_name;
    $filename = $id . '_' . $lastname . '.pdf';
    return $pdf->download($filename);
})->name('generate-pdf');
