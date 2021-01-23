<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function create(Request $data): \Illuminate\Http\RedirectResponse
    {
        //dd($data);
        Client::create([
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
       return view('Output/ClientOut', [
        'clients' => Client::all()
        ]);
    }
    public function delete(){

    }
}
