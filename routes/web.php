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

Route::get('/', 'PagesController@home');

// Route::get('/', function () {
//   $tasks = [
//     'Go to the store',
//     'Finish all your work',
//     'Be willing to die on a treadmil',
//     'Help Tesa be whatever she wants to be'
//   ];
//     return view('welcome')->withTasks($tasks)->withFoo('Codeful');
// });

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});
