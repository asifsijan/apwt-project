<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ambulance_add extends Model
{
    protected $table = 'ambulances';
    public $timestamps = true;
    protected $primaryKey = 'ambulance_id';
}
