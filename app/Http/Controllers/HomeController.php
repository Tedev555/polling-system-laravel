<?php

namespace App\Http\Controllers;

use App\Models\User;

class HomeController extends Controller
{
    //Show HomePage require user to enter username 
    public function index()
    {
        return view('home');
    }

    //When use submit username do identify use name from database
    public function identifyUser()
    {
        $user = User::where('username', request('username'))->first();

        if ($user == null) {
            return redirect('/');
        }

        //If user exist save use to session for use in future
        //And go to questions page
        session(['user' => $user]);
        return redirect('/poll/questions');
    }
}
