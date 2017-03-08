<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login()
    {

        $loginWasSuccessful = Auth::attempt([
            'email' => request('email'),
            'password' => request('password'),
//
        ]);

        if ($loginWasSuccessful) {

            return redirect('/admin')
               ->with('successStatus', "Welcome back!");

        } else {
            return redirect('/login')

                ->with('successStatus', "Invalid Credentials! ");

        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
