<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\DasbordController;
use App\Http\Controllers\EmailController2;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YourController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\MitraController;
use App\Models\Mitra;
use App\Models\partner;

// Route untuk halaman dashboard
Route::get('dashboard', [DasbordController::class, 'index'])->name('dashboard.index');

// Route untuk halaman home
Route::get('home', [HomeController::class, 'index'])->name('home.index');



// Route untuk halaman explore
Route::get('/explore', function () {
    return view('explore');
})->name('explore');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/appmobile', function () {
    return view('appmobile');
})->name('appmobile');




Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/appmob', function () {
    return view('appmob');
})->name('appmob');

Route::get('/konsul', function () {
    return view('konsul');
})->name('konsul');

Route::get('/webdev', function () {
    return view('webdev');
})->name('webdev');

Route::get('/succes', function () {
    return view('succes');
})->name('succes');




Route::get('/contact', [EmailController::class, 'showForm'])->name('contact.form');
Route::post('/send-email2', [EmailController2::class, 'sendEmail2'])->name('send.email2');
Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('send.email');

Route::get('/blog', [YourController::class, 'showBlogPage'])->name('blog');
Route::get('/explore', [YourController::class, 'explore'])->name('explore');
Route::get('/blog/{id}', [YourController::class, 'show'])->name('blog.show');
Route::get('/webdev', [YourController::class, 'webdev'])->name('webdev');
Route::get('/appmob', [YourController::class, 'appmob'])->name('appmob');


Route::get('/portfolio/{id}', [PortfolioController::class, 'show'])->name('filament.resources.portfolios.view');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/portfolio/{id}', [PortfolioController::class, 'show'])->name('portfolio.show');

// Route::get('/tentangkami', [PartnerController::class, 'tentangkami'])->name('tentangkami');
// Route::get('/tentangkami1', [PartnerController::class, 'tentangkami1'])->name('tentangkami1');
// Route::get('/tentangkami', [MitraController::class, 'tentangkami'])->name('tentangkami');


Route::get('/', function () {
    $blogs = \App\Models\Blog::all();
    $mitras = Mitra::all();
    return view('welcome', compact('blogs', 'mitras'));
})->name('welcome');

Route::get('/tentangkami', function () {
    $mitras = Mitra::all();
    $partners = partner::all();
    return view('tentangkami', compact('mitras', 'partners'));
})->name('tentangkami');


