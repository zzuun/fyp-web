<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionController extends Controller
{
    public function login()
    {
      return view('login');
    }

    public function store(Request $request)
    {
      $credentials = $request->only('email','password');
      if (Auth::attempt($credentials, $request->has('remember'))) {
            return redirect('home');
        }
      else {
          return back()->withErrors([
            'message'=> 'The Email or Password is incorrect!'
          ]);
      }
      // if (Auth::viaRemember()) {
      //   return redirect('home');
      // }
    }

    public function destroy()
    {
      auth()->logout();
      return redirect('/home');
    }
}
