<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spot;
use App\Notice;
use App\Skater;
use App\Terminology;
use App\Technique;

class SpotController extends Controller
{
    public function index(Request $request)
    {
        $spots = Spot::all();
        $notices = Notice::all();
        $skaters = Skater::all();
        $terminologies = Terminology::all();
        $techniques = Technique::all();

        return response(json_encode([$spots, $notices, $skaters, $terminologies, $techniques], JSON_UNESCAPED_UNICODE), 200);

        /*return view('spot.index', ['spots' => $spots, 
                                   'notices' => $notices, 
                                   'skaters' => $skaters, 
                                   'terminologies' => $terminologies, 
                                   'techniques' => $techniques]);*/
    }

    public function show(Request $request)
    {
        $id = $request->id;

        $spot = Spot::find($id);
        $notice = Notice::find($id);
        $skater = Skater::find($id);
        $terminology = Terminology::find($id);
        $technique = Technique::find($id);

        return view('spot.index', ['spot' => $spot,
                                   'notice' => $notice,
                                   'skater' => $skater,
                                   'terminology' => $terminology,
                                   'technique' => $technique]);
    }

    public function create(Request $request)
    {
        
    }

    public function update(Request $request)
    {
        
    }

    public function delete(Request $request)
    {
        
    }

}