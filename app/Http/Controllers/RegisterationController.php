<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;
use Auth;
use Illuminate\Contracts\Auth\Authenticatable;

class RegisterationController extends Controller
{
    public function register(Request $request)
    {
      $input = $request->all();
      $input['password'] = bcrypt($input['password']);
      $user = User::create([
        'name' => $input['name'],
        'email' => $input['email'],
        'password' => $input['password']
      ]);
      $user->save();
      auth()->login($user);
      return redirect('home');
    }

    public function login(Request $request)
    {
      $credentials = $request->only('email','password');
      if (Auth::attempt($credentials, $request->has('remember'))) {
          // $remember = $request->get('remember');
          // if (!empty($remember)) {
          // Auth::login();
          // }
            return redirect('home');
        }
      if (Auth::viaRemember()) {
        return redirect('home');
      }
    }
}
