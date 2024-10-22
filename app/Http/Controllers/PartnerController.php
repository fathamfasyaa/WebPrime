<?php

namespace App\Http\Controllers;

use App\Models\partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{

    public function tentangkami() {
        $partners = partner::all(); // Mengambil semua data blog
        return view('tentangkami', ['partners' => $partners]);
    }

}