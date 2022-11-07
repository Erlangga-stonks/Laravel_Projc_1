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
    return view('Main' ,[
        "title" => "First Homepage"
    ]);
});

Route::get('/about', function(){
    return view('about',[
        "title"=> "About",
        "name" => "Komi Shouko",
        "Jobs"=>  "Student at Itan Private High School ",
        "image"=> "Komi.png",
        "desc" => "Hello i'm komi Shouko i'm 17 years old and right now i'm looking for 
                   friends" 
    ]);
});