<?php

namespace App;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    
	

    protected $fillable = [
        'doctor_id', 'blog_name', 'blog_details',
    ];

}
