<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Election;
use App\Models\User;
use Illuminate\Http\Request;

class ElectionController extends Controller
{
    public function electionForm(){
        $users = User::all();
        return view('conductor.election', compact('users'));
    }

    public function election(){
        $elections = Election::all();
        return view('user.view-election', compact('elections'));
    }

    public function assignCandidate(){
        // $users = User::all();
        $election = Election::all();
        return view('candidate.assign-candidate',compact('election'));
    }

   public function saveElection(Request $request){
    // return $request;
     $request->validate([
        'election_name' => 'required',
        'election_year' => 'required',
        // 'Candidate_name' => 'required',
        'start_time' => 'required',
        'end_time' => 'required',
        'status' => 'required',

    ]);

    $election = new Election();
    
    $election->election_name = $request->election_name; 
    $election->election_year = $request->election_year; 
    // $election->candidate_name = $request->candidate_name; 
    $election->start_time = $request->start_time; 
    $election->end_time = $request->end_time; 

    if($election->save()){
        return redirect()->back()->with('success','Election is  saved');
    }
    else{
        return redirect()->back()->with('fail','Election cant be saved');
    }
   }


}
