<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
{
    $title = 'Home';
    return view('home', compact('title'));
}
    function about(){
        return view('aboutus');
    }
    function courses(){
        return view('courses');
    }
    function services(){
        return view('services');
    }

}
