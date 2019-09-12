<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vegetable extends Model
{
    protected $fillable = [
        'name', 'description', 'price', 'discount', 'featured_product'
    ];
}
