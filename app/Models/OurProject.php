<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class OurProject extends Model
{
    use Translatable;
    
    protected $translatable = ['content', 'sub_title', 'title', 'location', 'featured_1', 'featured_2', 'featured_3', 'featured_4', 'featured_5', 'architect'];
    protected $appends = ['images_array'];

    // Mutator to strip HTML tags from the 'content' attribute before saving
    public function setContentAttribute($value)
    {
        $this->attributes['content'] = strip_tags($value);
    }

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

    public function category()
    {
        return $this->belongsTo(ProjectCategory::class);
    }
}

