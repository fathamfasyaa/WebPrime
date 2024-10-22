<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    public function welcome()
    {
        $mitras = Mitra::all(); // Mengambil semua data dari model Blog
        return view('welcome', ['mitras' => $mitras]); // Mengirim data ke view
    }

    public function tentangkami()
    {
        $mitras = Mitra::all(); // Mengambil semua data dari model Blog
        return view('tentangkami', ['mitras' => $mitras]); // Mengirim data ke view
    }
}
