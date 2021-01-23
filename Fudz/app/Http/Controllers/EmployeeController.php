<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function create(Request $data)
    {
        //dd($data);
        Employee::create([
            'Surname' => $data['Surname'],
            'Fname' => $data['Fname'],
            'Lname' => $data['Lname'],
            'Telephone' => $data['Telephone'],
            'email' => $data['email'],
            'Address' => $data['Address'],
            'Speciality' => $data['Speciality'],
            'Average_Pay' => $data['Average_Pay'],

        ]);
        return redirect()->back();
    }
    public function Out()
    {
        return view('Output/EmployeeOut', [
            'employee' => Employee::all()
        ]);
    }
}
