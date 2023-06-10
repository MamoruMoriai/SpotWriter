<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;


class NoticeController extends Controller
{
    public function index(Request $request)
    {

        $notices = Notice::all();

        return view('spot.index', ['notices' => $notices]);
    }
}
