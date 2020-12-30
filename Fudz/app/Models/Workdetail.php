<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Workdetail extends Model
{
    use HasFactory, Notifiable;
    public $table = 'workdetail';
    public $primaryKey = 'id';

    protected $fillable = [
        'ProductionLead','ProductionTeam','ServiceLead','ServiceTeam'
    ];
}
