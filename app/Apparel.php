<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apparel extends Model
{
    public function products()
    {
        return $this->hasMany(Product::class, 'apparel_id', 'id');
    }
}
