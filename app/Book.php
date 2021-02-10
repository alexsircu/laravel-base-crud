<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'brand',
        'price',
        'alcohol_content',
        'nation',
        'description'
    ];
}
