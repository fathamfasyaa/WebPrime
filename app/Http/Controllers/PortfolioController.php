<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    // Method untuk menampilkan semua data portfolio
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('portfolio', compact('portfolios'));
    }

    // Method untuk menampilkan portfolio berdasarkan ID
    public function show($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $relatedPortfolios = Portfolio::where('id', '!=', $id)->latest()->paginate(2);
        
        // Ubah ini sesuai dengan nama view yang benar
        return view('appmobile', compact('portfolio', 'relatedPortfolios'));
    }
}