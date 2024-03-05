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

Route::get('/', function(){
    return view('home');
})->name('home');


Route::get('/produk', Produk::class)->name('produk');
Route::get('/testimoni', Testimoni::class)->name('testimoni');
Route::get('/tentang-kami', Tentang::class)->name('tentang');
Route::get('/kontak-kami', Kontak::class)->name('kontak');


Route::get('/test', function(){

//     $bot = TelegraphBot::find(4);


// // $chat = TelegraphChat::find(4);

// // // this will use the default parsing method set in config/telegraph.php
// // $chat->message('hello')->send();

// // $chat = $bot->chats()->create([
// //     'chat_id' => 5382896176,
// //     'name' => 'Belajar diskusi',
// // ]);

$pesan = TelegraphChat::find(4);


// // $data->html("<strong>Hello!</strong>\n\nI'm here!")->send();

$pesan->message('hi')
->keyboard(Keyboard::make()->buttons([
        Button::make('Delete')->action('delete')->param('id', '42')->width(1),
        Button::make('open')->url('https://test.it'),
        Button::make('Web App')->webApp('https://web-app.test.it'),
]))->send();




});
