<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dishes extends Model
{
    use HasFactory;
    public $table = 'dishes';
    public $primaryKey = 'id';
    public $timestamps = true;
    public $fillable = [
        'Starters','Accompaniments','Proteins','Dessert','Beverage','Snacks'
    ];
}
