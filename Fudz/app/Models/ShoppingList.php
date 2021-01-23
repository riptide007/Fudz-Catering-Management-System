<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ShoppingList extends Model
{
    use HasFactory, Notifiable;
    public $table = '_shopping_list';
    public $primaryKey = 'id';

    protected $guarded = [

    ];
}
