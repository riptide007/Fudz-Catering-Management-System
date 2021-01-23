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
            'Surname' => $data['Surname'],
            'Fname' => $data['Fname'],
            'Lname' => $data['Lname'],
            'Telephone' => $data['Telephone'],
            'email' => $data['email'],
            'Address' => $data['Address'],

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
