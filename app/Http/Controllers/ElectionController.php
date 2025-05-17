<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Election;
use App\Models\User;
use Illuminate\Http\Request;

class ElectionController extends Controller{

    // Page For Showing All Elections And Their Actions
    public function electionPage(){
        $election = Election::all();
        return view('election.election' , compact('election'));
    }


    // Page For New Election
    public function createElectionPage(){
        $users = User::all();
        return view('election.create', compact('users'));
    }


    // Logic For Saving Election Data
   public function saveElectionData(Request $request){
     $request->validate([
        'election_name' => 'required',
        'election_year' => 'required',
        'start_time' => 'required',
        'end_time' => 'required',
        'status' => 'required',
    ]);

    $election = new Election();
    
    $election->election_name = $request->election_name; 
    $election->election_year = $request->election_year; 
    $election->start_time = $request->start_time; 
    $election->end_time = $request->end_time; 

    if($election->save()){
        return redirect()->route('electionPage')->with('status','Election is  saved');
    }
    else{
        return redirect()->back()->with('fail','Election cant be saved');
    }
   }

   // Page For Edit Election Page
   public function editElectionPage($id){

    $election = Election::find($id);
    
    return view('election.edit' , compact('election'));
   }

    public function updateElectionData(Request $request){
        // validate incoming request
        $request->validate([
            'election_name' => 'required',
            'election_year' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'status' => 'required'
        ]);

        // find the 
        $election = Election::findOrFail($request->id);

        $election->election_name = $request->election_name;
        $election->election_year = $request->election_year;
        $election->start_time = $request->start_time;
        $election->end_time = $request->end_time;
        $election->status = $request->status;
        $election->save();

        return redirect()->route('electionPage')->with('status' , 'Election : '. $election->election_name . ' Detail Updated');
        
    }

    public function viewElectionPage($id){
                $election = Election::find($id);
            return view('election.view' , compact('election'));        
    }


}