<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DasbordController extends Controller
{
    public function index()
    {
        return view('home.welcome.blade.php');
    }
}
