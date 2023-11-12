<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
   public function login()
   {
        if (Auth::check()) {
            return redirect('/home');
        }else{
            return view('login.index');
        }
   }
   public function actionlogin(Request $request)
   {
    $credibels = $request->validate([
        'email' => 'required|email:dns',
        'password' => 'required'
    ]);
    if(Auth::attempt($credibels)){
        $request->session()->regenerate();
        return redirect()->intended('/dashboard');
    }
    return back()->with('loginEror','Login failed!');

   }

   public function actionlogout(Request $request){
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
   }
}
