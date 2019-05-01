<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function getResetToken(Request $request)
    {
      $this->validate($request, ['email' => 'required|email']);
        $user = User::where('email', $request->input('email'))->first();
        if (!$user) {
            return response()->json((['success'=>'false','message'=>'No user found Against provided Email']), 200);
        }
      $token = $this->broker()->createToken($user);
      $user->sendPasswordResetNotification($token);
      return response()->json((['success' => 'true','message'=>'Email send Successfully','token'=>$token]),200);
      }
}
