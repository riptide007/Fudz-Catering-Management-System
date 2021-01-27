<?php

namespace App\Http\Controllers;

use App\Models\ShoppingList;
use Illuminate\Http\Request;

class ShoppingListController extends Controller
{
    public function create(Request $data)
    {
        //dd($data);
        ShoppingList::create([
            'catering_id' => $data['catering_id'],
            'item_id' => $data['item_id'],
            'Productname' => $data['Productname'],
            'Quantity' => $data['Quantity'],
            'PurchaseLocation' => $data['PurchaseLocation'],
            'CostperUnit' => $data['CostperUnit'],
            'Unit' => $data['Unit'],


        ]);
        return redirect()->back();
    }
    public function Out()
    {
        return view('Output/ShoppingListOut', [
            'shoppinglist' => ShoppingList::all()
        ]);
    }
}
