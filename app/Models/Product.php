<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Product extends Model
{
    use Translatable;
    protected $translatable = ['name', 'description'];
    protected $appends = ['images_array'];

    public function getImagesArrayAttribute()
    {
        // Check if the 'images' attribute is null or empty
        if (empty($this->attributes['images'])) {
            return []; // Return an empty array if no images
        }

        // Decode 'images' assuming it's JSON
        $decoded = json_decode($this->attributes['images'], true);

        // If decoding fails or results in null, fall back to an empty array
        return is_array($decoded) ? $decoded : [];
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }
    public function size()
    {
        return $this->belongsTo(Size::class);
    }
    public function model()
    {
        return $this->belongsTo(ProductModel::class);
    }
    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
