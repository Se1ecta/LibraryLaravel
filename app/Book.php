<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    protected $table = 'books';
    public $timestamps = true;

    protected $casts =[
        'rating' => 'float'
    ];

    protected $fillable =[
        'title',
        'author',
        'category',
        'description',
        'rating',
        'image'
    ];
    public function authors()
    {
        return $this->hasMany(Author::class);
    }
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
