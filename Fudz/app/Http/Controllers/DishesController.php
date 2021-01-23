<?php

namespace App\Http\Controllers;

use App\Models\Dishes;
use Illuminate\Http\Request;

class DishesController extends Controller
{
    public function create(Request $data)
    {
        //dd($data);
        Dishes::create([
            'Starters' => $data['Starters'],
            'Accompaniments' => $data['Accompaniments'],
            'Proteins' => $data['Proteins'],
            'Dessert' => $data['Dessert'],
            'Beverage' => $data['Beverage'],
            'Snacks' => $data['Snacks'],

        ]);
        return redirect()->back();
    }
    public function Out()
    {
        return view('Output/DishesOut', [
            'dishes' => Dishes::all()
        ]);
    }
}
