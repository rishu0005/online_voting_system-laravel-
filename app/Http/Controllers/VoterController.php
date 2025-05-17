<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class VoterController extends Controller
{
    public function voterPage(){
        $users = User::all();
        return view('voter.voter' , compact('users'));
    }

    public function registerVoter(){
        return view('voter.register');
    }

    public function saveVoterData(Request $request){

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
                return redirect()->route('voterPage');
            }
            else{
    
             return redirect()->back()->with('status','Cant register');
            }
    }
   
        
   
}
