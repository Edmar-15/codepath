<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;


Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/courses', function () {
    return view('courses');
})->name('courses');


Route::get('/html-course', function () {
    return view('course-home');
})->name('course-home');

Route::get('/html-course/level/{level}', function ($level) {
    return view('level-quiz', ['level' => $level]);
})->name('course.level');

