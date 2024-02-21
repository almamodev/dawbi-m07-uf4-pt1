<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Team;

class TeamController extends Controller
{
    public function all(): View
    {
        $teams = Team::all();
        return view('pages.team.all')->with('teams', $teams);
    }
}
