<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function viewProfile($userID) {
        $user = User::find($userID);

        return view('profile', compact('app_user'));
    }
}
