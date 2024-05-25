<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('page.register');
    }
    public function welcome(Request $requet)
    {
        $fname = $requet->input('fisrtname');
        $lname = $requet->input('lastname');
        return view('page.welcome',['fname' => $fname, 'lname' => $lname]);
    }
}
