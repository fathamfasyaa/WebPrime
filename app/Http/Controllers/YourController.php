<?php

namespace App\Http\Controllers;

use App\Models\Blog; // Pastikan model Blog diimport
use Illuminate\Http\Request;

class YourController extends Controller
{
    public function welcome()
    {
        $blogs = Blog::all(); // Mengambil semua data dari model Blog
        return view('welcome', ['blogs' => $blogs]); // Mengirim data ke view
    }

    public function explore(){
        $blogs = Blog::all(); // Ambil semua blog dari database
        return view('explore', ['blogs' => $blogs]); // Kirim data blogs ke view
    }

    public function showBlogPage() {
        $blogs = Blog::all(); // Mengambil semua data blog
        return view('blog', ['blogs' => $blogs]);
    }

    public function webdev() {
        $blogs = Blog::all(); // Mengambil semua data blog
        return view('webdev', ['blogs' => $blogs]);
    }

    public function appmob() {
        $blogs = Blog::all(); // Mengambil semua data blog
        return view('appmob', ['blogs' => $blogs]);
    }

    public function show($id)
{
    $blog = Blog::findOrFail($id);
    $relatedBlogs = Blog::where('id', '!=', $id)->latest()->paginate(2);
    return view('succes', compact('blog', 'relatedBlogs'));
}
}
