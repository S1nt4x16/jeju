<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about', [
            "title" => "About",
            "name" => "Valentinus Moreno",
            "email" => "valentinusmoreno@gmail.com",
            "image" => "luffy.jpg"
        ]);
    }
}
