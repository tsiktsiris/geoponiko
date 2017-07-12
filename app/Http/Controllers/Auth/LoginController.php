<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use View;
use Session;
use Request;
use App\Client;
use App\User;
use Hash;

class LoginController extends Controller
{
    public function login()
    {
      //Redirect to home if user is authenticated
      if(Auth::user())
        return redirect()->route('backend.home');
      else
        return view('backend.auth.login');
    }

    public function authenticate()
    {
      $email = Request::input('email');
      $password = Request::input('password');

      $user = User::where('email',$email)->first();

      if($user)
      {
        if(Hash::check($password, $user->password))
        {
            $this->login($user->id, $password);
            return redirect()->route('backend.home');
        }
        else
            return redirect()->route('backend.login');
      }

      return redirect()->route('backend.login');



    }

    public function logout()
    {
      Auth::logout();
      return redirect()->route('backend.login');
    }
}
