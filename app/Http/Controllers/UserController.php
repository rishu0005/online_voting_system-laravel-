<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Election;



class UserController extends Controller
{
    public function showLoginForm(){
        return view('auth.login');
    }


    public function loginUser(Request $request){

    $data = $request->validate([

      'email' => 'required',
      'password' => 'required|min:8|max:20' ]);

    if(Auth::attempt($data)){
        if(Auth::user()->role === 'admin'){
            return redirect()->route('adminDashboardPage');
        }
        // else{
        //     return redirect()->route('home');
        // }

    }
    else{
        return redirect()->route('login')->with('status','Please Enter Right Credentials');
    }
    }

    // public function register(){
    //     return view('auth.register');
    // }

    // 
    // public function home(){
    //     return view('user.home');
    // }
        // public function dashboard(){
        //         $election = Election::all();
        //         // return $election;
        //         $users = User::all();
        //     return view('conductor.dashboard' , compact('election' , 'users'));
        // }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
