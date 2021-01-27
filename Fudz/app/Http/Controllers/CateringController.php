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
            'client_id' => $data['client_id'],
            'Event_type' => $data['Event_type'],
            'Location' => $data['Location'],
            'GuestNo' => $data['GuestNo'],
            'Location_Details' => $data['Location_Details'],
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
