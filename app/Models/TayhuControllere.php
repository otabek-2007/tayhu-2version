<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class TayhuControllere extends Model
{
    use Translatable;

    protected $translatable = ['location_1', 'location_2', 'about_text'];
}
