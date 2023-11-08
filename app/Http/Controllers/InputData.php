<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputData extends Controller
{
    public function news() {
        return view('input.news');
    }
    public function lecturer() {
        return view('input.lecturer');
    }
}
