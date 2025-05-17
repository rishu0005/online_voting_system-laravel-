<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Election;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminDashboardPage(){
        $election = Election::all();
        $users = User::all();

        return view('admin.dashboard', compact( 'election', 'users'));

    }
}
