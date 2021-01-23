<?php

namespace App\Http\Controllers;

use App\Models\Catering;
use Illuminate\Http\Request;

class CateringController extends Controller
{
    public function create(Request $data)
    {
        //dd($data);
        Catering::create([
            'Event_type' => $data['Event_type'],
            'Location' => $data['Location'],
            'GuestNo' => $data['GuestNo'],
            'Utilities' => $data['Utilities'],
            'Date' => $data['Date'],
            'Time' => $data['Time'],

        ]);
        return redirect()->back();
    }
    public function Out()
    {
        return view('Output/CateringOut', [
            'catering' => Catering::all()
        ]);
    }
}
