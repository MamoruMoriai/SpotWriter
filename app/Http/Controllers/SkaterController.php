<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skater;


class SkaterController extends Controller
{
    public function index(Request $request)
    {
        
        $skaters = Skater::all();

        return view('spot.index', ['skaters' => $skaters]);
    }
}
