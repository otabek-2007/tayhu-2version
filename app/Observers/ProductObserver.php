<?php

namespace App\Observers;

use App\Models\Product;

class ProductObserver
{
    public function saving(Product $product)
    {
        // Har bir til uchun description maydonini qayta ishlash
        foreach (config('voyager.multilingual.locales') as $locale) {
            // Har bir til bo‘yicha description maydonini oling
            $description = $product->getTranslatedAttribute('description', $locale);

            if ($description) {
                // HTML teglarini olib tashlash
                $cleanDescription = strip_tags($description);

                // Tozalangan ma'lumotni qayta saqlash
                $product->setAttribute("description->{$locale}", $cleanDescription);
            }
        }
    }
}
