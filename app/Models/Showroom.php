<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Showroom extends Model
{
    use Translatable;
    protected $translatable = ['name'];
    protected $appends = ['images_array'];

    public function getImagesArrayAttribute()
    {
        if (empty($this->attributes['images'])) {
            return [];
        }

        $decoded = json_decode($this->attributes['images'], true);

        return is_array($decoded) ? $decoded : [];
    }
}
