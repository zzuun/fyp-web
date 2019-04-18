<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;
use Auth;
use Illuminate\Contracts\Auth\Authenticatable;

class RegisterationController extends Controller
{
    public function register()
    {
      return view('register');
    }

    public function store(Request $request)
    {
      $input  =  $request->all();
      $rule = array(
        'name'=>'required',
        'email'=>'required|email',
        'password'=>'required|confirmed|between:8,30',
      );
      $validator = Validator::make($input,$rule);
      if ($validator->fails()) {
        return back()->withErrors($validator);
      }
      else {
        $check = User::where('email',$input['email'])->first();
        if(isset($check)){
          return back()->withErrors([
            'email'=>'This Email is Already Registered!'
          ]);
        }
        else {
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
      }
    }
}
