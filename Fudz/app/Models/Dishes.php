<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Dishes extends Model
{
    use HasFactory, Notifiable;
    public $table = 'dishes';
    public $primaryKey = 'id';

    protected $fillable = [
        'Starters','Accompaniments','Proteins','Dessert','Beverage','Snacks'
    ];
}
