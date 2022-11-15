<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('about',[
            "title"=> "About",
            "name" => "Komi Shouko",
            "Jobs"=>  "Student at Itan Private High School ",
            "image"=> "Komi.png",
            "desc" => "Hello i'm komi Shouko i'm 17 years old and right now i'm looking for 
                       friends" 
        ]);
    }
}
