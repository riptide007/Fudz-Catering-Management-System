<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public $table = 'employee';
    public $primaryKey = 'id';
    public $timestamps = true;
    public $fillable = [
        'Surname','Fname','Lname','Telephone','email','Address','Speciality','Average_Pay'
    ];
}
