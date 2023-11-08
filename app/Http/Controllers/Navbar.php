<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Navbar extends Controller
{
    public function news() {
        return view('news');
    }

    public function profileksi() {
        return view('profileksi');
    }

    public function lecturerksi() {
        return view('lecturerksi');
    }

    public function userNews() {
        return view('news');
    }
    
    public function userLecturer() {
        return view('lecturerksi');
    }
}
