<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    protected $fillable = [
        'brand',
        'price',
        'alcohol_content',
        'nation',
        'description',
        'created_at',
        'updated_at'
    ];
}
