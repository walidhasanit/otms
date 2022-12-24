<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminTeacherController;
use App\Http\Controllers\TeacherAuthController;
use App\Http\Controllers\CourseController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/training-category', [HomeController::class, 'trainingCategory'])->name('training.category');
Route::get('/all-training', [HomeController::class, 'trainingCategory'])->name('all.training');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/login-registration', [HomeController::class, 'auth'])->name('login.registration');

Route::get('/teacher/login', [TeacherAuthController::class, 'index'])->name('teacher.login');
Route::post('/teacher/login', [TeacherAuthController::class, 'login'])->name('teacher.login');
Route::get('/teacher/dashboard', [TeacherAuthController::class, 'dashboard'])->name('teacher.dashboard');
Route::post('/teacher/logout', [TeacherAuthController::class, 'logout'])->name('teacher.logout');

Route::get('/add/course', [CourseController::class, 'index'])->name('add.course');
Route::post('/add/new/course', [CourseController::class, 'create'])->name('new.course');
Route::get('/manage/course', [CourseController::class, 'manage'])->name('manage.course');
Route::get('/edit/course/{id}', [CourseController::class, 'edit'])->name('edit.course');
Route::post('/update/course/{id}', [CourseController::class, 'update'])->name('update.course');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/add/category', [CategoryController::class, 'index'])->name('add.category');
    Route::post('/add/new/category', [CategoryController::class, 'create'])->name('new.category');
    Route::get('/mange/category', [CategoryController::class, 'manage'])->name('manage.category');
    Route::get('/edit/category/{id}', [CategoryController::class, 'edit'])->name('edit.category');
    Route::post('/update/category/{id}', [CategoryController::class, 'update'])->name('update.category');
    Route::get('/update/category-status/{id}', [CategoryController::class, 'updateStatus'])->name('category.update-status');
    Route::get('/delete/category/{id}', [CategoryController::class, 'delete'])->name('delete.category');

    Route::get('/add/teacher', [AdminTeacherController::class, 'index'])->name('add.teacher');
    Route::post('/add/new/teacher', [AdminTeacherController::class, 'create'])->name('new.teacher');
    Route::get('/manage/teacher', [AdminTeacherController::class, 'manage'])->name('manage.teacher');
    Route::get('/edit/teacher/{id}', [AdminTeacherController::class, 'edit'])->name('edit.teacher');
    Route::post('/update/teacher/{id}', [AdminTeacherController::class, 'update'])->name('update.teacher');
    Route::get('/delete/teacher/{id}', [AdminTeacherController::class, 'delete'])->name('delete.teacher');

});
