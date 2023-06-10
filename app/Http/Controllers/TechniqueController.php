<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Technique;


class TechniqueController extends Controller
{
    public function index(Request $request)
    {
        
        $techniques = Technique::all();

        return view('spot.index', ['techniques' => $techniques]);
    }
}
