<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function create(Request $data)
    {
        //dd($data);
        Inventory::create([
            'Name' => $data['Name'],
            'quantity' => $data['quantity'],
            'priceperunit' => $data['priceperunit'],
            'unit' => $data['unit'],
            'supplier_id' => $data['supplier_id'],
            'ItemCondition' => $data['ItemCondition'],


        ]);
        return redirect()->back();
    }
    public function Out()
    {
        return view('Output/InventoryOut', [
            'inventory' => Inventory::all()
        ]);
    }
}
