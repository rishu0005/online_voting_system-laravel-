<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function showLoginForm(){
        return view('auth.login');
    }

    public function voters(){
        return view('conductor.voters');
    }
    public function loginUser(Request $request){

    $data = $request->validate([

      'email' => 'required',
      'password' => 'required|min:8|max:20' ]);

    if(Auth::attempt($data)){
        if(Auth::user()->role === 'admin'){
            return redirect()->route('dashboard');
        }
        else{
            return redirect()->route('home');
        }

    }
    else{
        return redirect()->route('login')->with('status','Please Enter Right Credentials');
    }
    }

    public function register(){
        return view('auth.register');
    }

    public function registerUser(Request $request){
        $request->validate([
            'name' =>'required',
            'username' => 'required|unique:users,username',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'class' => 'required',
            'year' => 'required',
            'enroll' =>'required'
        ]);

        $data = new User();
        $data->name = $request->name;
        $data->username = $request->username;
        $data->class = $request->class;
        $data->enroll_no = $request->enroll;
        $data->year = $request->year;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        // return $data ;       
        if($data->save()){
            return redirect()->route('login');
        }
        else{

         return redirect()->route('register')->with('status','Cant register');
        }
        
    }
    public function home(){
        return view('user.home');
    }
    public function dashboard(){
        return view('conductor.dashboard');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
