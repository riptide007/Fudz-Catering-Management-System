<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    public $table = 'items';
    public $primaryKey = 'id';
    public $timestamps = true;
    public $fillable = [
        'Name','quantity','priceperunit','unit','ItemCondition'
    ];
}
