<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function create(Request $data)
    {
        //dd($data);
        Supplier::create([
            'Name' => $data['Name'],
            'Telephone' => $data['Telephone'],
            'email' => $data['email'],
            'Address' => $data['Address'],

        ]);
        return redirect()->back();
    }
    public function Out()
    {
        return view('Output/SupplierOut', [
            'supplier' => Supplier::all()
        ]);
    }
}
