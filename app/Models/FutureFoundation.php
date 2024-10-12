<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class FutureFoundation extends Model
{
    use Translatable;

    protected $translatable = ['project_design_text', 'property_management_text', 'final_assemble_text'];
}
