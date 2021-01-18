<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function create(Request $data)
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
    public function index()
    {
        $teachers = Client::all();



        return view('admin.teachers.index', [
            'teachers' => $teachers,
        ]);
    }
}
