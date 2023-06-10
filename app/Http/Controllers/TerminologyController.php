<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Terminology;


class TerminologyController extends Controller
{
    public function index(Request $request)
    {

        $terminologies = Terminology::all();

        return view('spot.index', ['terminologies' => $terminologies]);
    }
}
