<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    function index() {
        return "login page";
    }
    public function customLogin(Request $request)
    {    
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return "signed in";
        }   
        return 'Login details are not valid';
    }
}
