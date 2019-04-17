<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;

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
      return redirect('home');
    }

    public function login(Request $request)
    {
      dd($request->all());
    }
}
