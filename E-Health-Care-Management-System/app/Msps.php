<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Msps extends Model
{
    protected $table = 'm_s_p_s';
    public $timestamps = false;
    protected $primaryKey = 'msps_id';
}
