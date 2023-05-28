<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class UserController extends Controller
{
    public function register(Request $request) {
        $user = new User(["name" => '', "email" => $request -> email, "password" => '']);
        $user -> save();
        return redirect('/');
    }

    public function login (Request $request) {
        // login dengan credentials yang ada
        $credentials = $request -> validate(['email' => ['required', 'email'], 'password' => ['required']]);

        if ($request -> remember) {
            Cookie::queue('remember', 'yes');
        }

        // untuk login sukses
        if (Auth::attempt($credentials)) {
            session([email => $request -> mail]);
            return redirect('/');
            // kalau login sukses, redirect ke home page
        }
        // kalau gagal login, redirect ke login page
        return redirect() -> back();
    }
}
