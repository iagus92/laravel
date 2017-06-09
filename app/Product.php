<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $table = 'products';

     protected $fillable = [
         'name', 'price',
     ];

     public function images()
     {
        return $this->hasMany('App\Image');
     }
}
