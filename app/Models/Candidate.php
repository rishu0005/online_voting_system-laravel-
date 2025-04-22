<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Election;

class Candidate extends Model
{
    use HasFactory;
    protected $table = 'candidate';

    public function user(){
        return $this->belongsTo(User::class, 'candidate_id', 'id');
    }

    public function election(){
        return $this->belongsTo(Election::class, 'election_id', 'id');
    }
}
