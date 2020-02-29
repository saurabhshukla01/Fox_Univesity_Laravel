<?php

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/staff', function () {
    return view('teacher');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog-single', function () {
    return view('blog-single');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/apply_now', function () {
    return view('applynow');
});

Route::get('/description', function () {
    return view('description');
});

Route::get('/apply_now', function () {
    return view('applynow');
});

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/application2', function () {
    return view('application2');
});

Route::get('/education_details', function () {
    return view('education_details');
});

Route::get('/Personal_information', function () {
    return view('Personal_information');
});

Route::get('/verification_information', function () {
    return view('verification_information');
});

Route::get('/final_sumbit', function () {
    return view('final_sumbit');
});

