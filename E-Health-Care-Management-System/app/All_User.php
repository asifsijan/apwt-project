<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class All_User extends Model
{
    protected $table = 'users';
    public $timestamps = true;
    protected $primaryKey = 'id';
}
