<?php

namespace App\Http\Controllers;

use App\Models\Workdetail;
use Illuminate\Http\Request;

class WorkdetailController extends Controller
{
    public function create(Request $data)
    {
        //dd($data);
        Workdetail::create([
            'catering_id' => $data['catering_id'],
            'ProductionLead' => $data['ProductionLead'],
            'ProductionTeam' => $data['ProductionTeam'],
            'ServiceLead' => $data['ServiceLead'],
            'ServiceTeam' => $data['ServiceTeam'],


        ]);
        return redirect()->back();
    }
    public function Out()
    {
        return view('Output/WorkDetailOut', [
            'Workdetail' => Workdetail::all()
        ]);
    }
}
