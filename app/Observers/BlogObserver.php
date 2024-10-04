<?php

namespace App\Observers;

use App\Models\Blog;

class BlogObserver
{
    public function saving(Blog $product)
    {
        // Har bir til uchun content maydonini qayta ishlash
        foreach (config('voyager.multilingual.locales') as $locale) {
            // Har bir til bo‘yicha content maydonini oling
            $content = $product->getTranslatedAttribute('content', $locale);

            if ($content) {
                // HTML teglarini olib tashlash
                $cleanContent = strip_tags($content);

                // Tozalangan ma'lumotni qayta saqlash
                $product->setAttribute("content->{$locale}", $cleanContent);
            }
        }
    }
}
