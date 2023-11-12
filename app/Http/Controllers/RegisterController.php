<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(){
        return view('register.index');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
             'name' => 'required|max:255',
             'email' => 'required|email:dns|unique:users',
             'password' => 'required|min:5|max:255'
         ]);
         $validatedData['password'] = Hash::make($validatedData['password']);     
         User::create($validatedData);
         $request = session();
         $request->flash('success', 'Registration successfull! Please login');
         return redirect('/');
     }
 
}
