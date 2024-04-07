<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use App\Http\Requests\RegisterProcessRequest;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('auth.login');
    }

    public function registerPage()
    {
        return view('auth.register');
    }

    public function login()
    {

    }

    public function register(RegisterProcessRequest $request)
    {

        $data = $request->validated();

        $user = User::create($data);

        event(new Registered($user));

        Auth::login($user);


        return redirect(route('dashboard', absolute: false));





    }
}
