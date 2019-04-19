<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Auth;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest:admin', ['except' => ['logout']]);
    }

    public function showLoginForm()
    {
      return view('auth.admin-login');
    }

    public function login(Request $request)
    {
      //validate the form data
      $this->validate($request,[
        'email' => 'required|email',
        'password' => 'required|string'
      ]);

      //authenticate
      if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password],$request->remember)) {
        return redirect()->intended(route('admin.dashboard'));
      }

      return redirect()->back()->withErrors([
        'error' => 'These credentials do not match our records.'
      ]);
    }

    public function logout()
    {
      Auth::guard('admin')->logout();
      return redirect(route('page.home'));
    }
}
