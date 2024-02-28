<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CandidateApplication;
use Auth;

class CandidateController extends Controller
{
    public function dashboard()
    {
        return view('candidate.dashboard');
    }

}