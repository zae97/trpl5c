<?php

namespace App\Http\Controllers\UserAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//Class needed for login and Logout logic
use Illuminate\Foundation\Auth\AuthenticatesUsers;
//Auth facade
use Auth;
class LoginController extends Controller
{
  //Where to redirect seller after login.
  //user
  protected $redirectTo = '/user_home';

  //Trait
  use AuthenticatesUsers;

  //Custom guard for user
  protected function guard()
  {
    return Auth::guard('web_user');
  }
  public function showLoginForm()
   {
       return view('user.auth.login');
   }
}
