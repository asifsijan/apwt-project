<?php

namespace App;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Cviebrock\EloquentSluggable\Sluggable;

class Blog extends Model
{
    
	//use Sluggable;

    protected $fillable = [
        'doctor_id', 'blog_name', 'blog_details',
    ];

    protected $primaryKey = 'blog_id';



}
