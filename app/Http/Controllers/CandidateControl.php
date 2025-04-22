<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Election;
use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CandidateControl extends Controller
{
    public function noticePage(){
            $elections = Election::all();    
            return view('user.notice-page',  compact('elections'));
    }


    public function candidatePage(){
        $candidates = Candidate::with(['user','election'])->paginate(10);
        // return $candidates;
        return view('candidate.view-candidate',compact('candidates'));
    }


    public function applyElection($election_id){

        $election_id = Election::find($election_id);
        // return $election_id;
        return view('user.apply-election', compact('election_id'));
    }


    public function applyElectionForm(Request $request){
        
        //get data
        $user = Auth::user()->id;
        $request->validate([
            'election_id' => 'required'
        ]);
     
        //checking if data is already exists
        $user_find = Candidate::where('election_id',$request->election_id)->where('candidate_id', $user)->first();
        if($user_find){
            return redirect()->back()->with('status','your response is already saved');
        }


        // Saving Data 
        $candidate = new Candidate();
        $candidate->candidate_id = $user;
        $candidate->election_id = $request->election_id;

       if($candidate->save()){
           return redirect()->back()->with('status', 'your response is saved');
       } 
       else{
        return redirect()->back()->with('status', 'Something went wrong');
       }
    }

        
}
