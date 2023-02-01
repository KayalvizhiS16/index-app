<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Score;
class ScoreController extends Controller
{
    //
    function index()
    {
        return view('scores');
    }
}