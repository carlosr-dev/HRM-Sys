<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use Redirect;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }  
      
    public function dashboard()
    {
        if(Auth::check()) { 
            return view('app.dashboard');
        }
        else{
            return redirect()->route('login');
        }
    }

    public function verify(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }
  
        return redirect()->route('login')->withDanger('Los datos de inicio de sesión no son válidos');
    }
    

    public function logout(){
        Auth::logout(); 
        return  redirect()->route('login')->with('success','Sesión finalizada con exito!');
    }  
}