<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'authors';
    public $timestamps = true;
    
    protected $fillable =[
        'name',
        'surname',
        'category',
        'date_of_birth',
        'date_of_death',
        'image'
    ];
}
