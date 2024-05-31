<?php

use App\Livewire\Home;
use App\Livewire\Kontak;
use App\Livewire\Lepwer;
use App\Livewire\Produk;
use App\Livewire\Tentang;
use App\Livewire\TodoList;

use App\Livewire\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Livewire\Authentication\Login;
use App\Http\Controllers\AuthController;
use DefStudio\Telegraph\Facades\Telegraph;
use App\Http\Controllers\EmailVerifiedController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;





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
// Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
// Route::get('/register', [AuthController::class, 'registerPage'])->name('register');

Route::post('/register', [AuthController::class, 'register'])->name('registerProcess');

Route::get('/dashboard', function(){
    return dd('selamat anda bisa ke halaman ini');
})
->middleware(['auth', 'verified'])
->name('dashboard');


Route::middleware('auth')->group(function () {

Route::get('verify-email', [EmailVerifiedController::class, 'showVerificationPage'])->name('verification.notice');


Route::post('email/verification-notification', [EmailVerifiedController::class, 'resendEmailVerification'])
->middleware('throttle:6,1')
->name('verification.send');
});


Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {

$request->fulfill();

return redirect(route('dashboard'));

})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/todo-list', TodoList::class);

