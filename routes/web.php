<?php

use App\Livewire\Home;
use App\Livewire\Kontak;
use App\Livewire\Produk;
use App\Livewire\Tentang;
use App\Livewire\Testimoni;
use Illuminate\Support\Facades\Route;
use DefStudio\Telegraph\Facades\Telegraph;
use DefStudio\Telegraph\Models\TelegraphBot;
use DefStudio\Telegraph\Models\TelegraphChat;
use DefStudio\Telegraph\Keyboard\Button;
use DefStudio\Telegraph\Keyboard\Keyboard;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', Home::class)->name('home');
Route::get('/produk', Produk::class)->name('produk');
Route::get('/testimoni', Testimoni::class)->name('testimoni');
Route::get('/tentang-kami', Tentang::class)->name('tentang');
Route::get('/kontak-kami', Kontak::class)->name('kontak');

