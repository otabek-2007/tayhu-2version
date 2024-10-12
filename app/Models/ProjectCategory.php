<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class ProjectCategory extends Model
{
    use Translatable;

    protected $translatable = ['name'];

    public function ourProjects()
    {
        return $this->hasMany(OurProject::class, 'category_id');
    }
}
