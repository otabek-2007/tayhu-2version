<?php

namespace App\Observers;

use App\Models\Blog;

class BlogObserver
{
    public function saving(Blog $product)
    {
        $product->content = strip_tags($product->content);
    }
}