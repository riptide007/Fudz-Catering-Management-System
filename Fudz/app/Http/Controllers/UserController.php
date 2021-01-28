<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Out()
    {
        return view('Output/UserOut', [
            'user' => User::where('isActive',1)->get()
        ]);
    }
}
