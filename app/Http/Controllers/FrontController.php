<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index'); // Replace with the actual view name for the landing page
    }
}
