<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catering extends Model
{
    use HasFactory;
    public $table = 'catering';
    public $primaryKey = 'id';
    public $timestamps = true;
    public $fillable = [
        'Event_type','Location','GuestNo','Utilities','Date','Time'
    ];
}
