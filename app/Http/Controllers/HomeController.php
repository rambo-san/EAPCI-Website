<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        return view('home');
    }
    function about(){
        return view('aboutus');
    }
    function courses(){
        return view('courses');
    }

}