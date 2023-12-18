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
    $data = [
        'name' => 'Giorgio Bolzoni',
        'age' => '27',
    ];
    return view('home', $data);
});
Route::get('/about', function () {
    $study = [
        'course' => 'Boolean',
        'classe' => '107',
    ];
    return view('about', $study);
});
