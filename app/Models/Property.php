<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Property extends Model
{
    
    use Translatable;

    protected $translatable = ['name'];

    public function products()
    {
        return $this->hasMany(Product::class, 'brand_id');
    }
}