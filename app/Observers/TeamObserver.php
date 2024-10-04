<?php

namespace App\Observers;

use App\Models\Team;

class TeamObserver
{
    public function saving(Team $product)
    {
        $product->description = strip_tags($product->description);
    }
}