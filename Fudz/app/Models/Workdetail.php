<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workdetail extends Model
{
    use HasFactory;
    public $table = 'workdetail';
    public $primaryKey = 'id';
    public $timestamps = true;
    public $fillable = [
        'ProductionLead','ProductionTeam','ServiceLead','ServiceTeam'
    ];
}
