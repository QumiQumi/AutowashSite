<?php

namespace App\Http\Controllers;
use App\Teammate;

use Illuminate\Http\Request;

class TeammateController extends Controller
{
    public function index()
    {
        //
        $team = Teammate::all();
        return view('pages.team', ['team' => $team]);
    }

}
