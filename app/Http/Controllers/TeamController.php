<?php

namespace App\Http\Controllers;
use App\Teams;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function team(Request $request)
    {
        $all_team=Teams::all();
        return view('team',compact('all_team'));
        
        
    }
}
