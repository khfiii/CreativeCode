<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailVerifiedController extends Controller
{
    public function showVerificationPage()
    {
        return auth()->user()->hasVerifiedEmail() ? redirect(route('dashboard')) : view('auth.verify-email');
    }

    public function resendEmailVerification(Request $request)
    {
        if($request->user()->hasVerifiedEmail()){
            return redirect()->intended(route('dashboard'));
        }

        $request->user()->sendEmailVerificationNotification();

        return back()->with('message', 'Link verifikasi telah dikirim');


    }
}
