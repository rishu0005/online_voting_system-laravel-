<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Election;
use Illuminate\Http\Request;

class CandidateControl extends Controller
{
    public function noticePage(){
            $elections = Election::all();    
            return view('user.notice-page',  compact('elections'));
    }
    public function applyElection(){
        return view('user.apply-election');
    }
}
