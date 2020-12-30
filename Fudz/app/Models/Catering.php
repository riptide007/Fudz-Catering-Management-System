<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Catering extends Model
{
    use HasFactory, Notifiable;
    public $table = 'catering';
    public $primaryKey = 'id';

    protected $fillable = [
        'Event_type','Location','GuestNo','Utilities','Date','Time'
    ];
}
