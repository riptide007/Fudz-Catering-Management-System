<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Inventory extends Model
{
    use HasFactory, Notifiable;
    public $table = 'items';
    public $primaryKey = 'id';

    protected $fillable = [
        'Name','quantity','priceperunit','unit','ItemCondition'
    ];
}
