<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        //return $request->email;
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed...
            //Auth::user()->name;
            session()->put('key',Auth::user()->id);
            session()->put('user',Auth::user());
            //echo session()->get('key');
            return redirect()->route('dashboard');
        }
    }
}
