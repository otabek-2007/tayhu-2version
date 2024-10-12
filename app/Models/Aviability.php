<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Aviability extends Model
{
    use Translatable;
    protected $translatable = ['type'];
}
