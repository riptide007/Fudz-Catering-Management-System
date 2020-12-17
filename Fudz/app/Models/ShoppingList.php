<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingList extends Model
{
    use HasFactory;
    public $table = '_shopping_list';
    public $primaryKey = 'id';
    public $timestamps = true;
    public $fillable = [
        'Productname','Quantity','PurchaseLocation','CostperUnit','Unit'
    ];
}
