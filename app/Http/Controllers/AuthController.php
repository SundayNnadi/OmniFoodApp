<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\email;
class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function registerPost(Request $request)
    {
        $user = new User(); // Create a new User instance

        // Assign values to the properties using correct syntax
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->username = $request->input('username');
        $user->password = Hash::make($request->input('password'));

        // Save the user to the database
        $user->save();

        return back()->with('success', 'Register successfully');
    }
    
    public function login(){
        return view('home');
    }

    public function loginPost(Request $request)
    {
        $credetials =[
            'email'=>$request->email,
            'password'=>$request->password,
            'username'=>$request->username,
        ];
        if(Auth::attempt($credetials)){
            return redirect('/home')->with('success', 'login successful' );
        }
        return back()->with('error',  'Password is incorrect');

         }

         public function logout()
         {
          Auth::logout();
          return redirect()->route('/login');   
         }
     }
