<?php

namespace App\Observers;

use App\Models\Product;

class ProductObserver
{
    public function saving(Product $product)
    {
        // JSON formatida tilga asoslangan ma'lumotlarni qayta ishlash
        $description = json_decode($product->description, true);

        if (is_array($description)) {
            foreach ($description as $locale => $desc) {
                // Har bir til uchun HTML teglarini olib tashlash
                $description[$locale] = strip_tags($desc);
            }
            // JSON formatini qayta saqlash
            $product->description = json_encode($description);
        } else {
            // Agar kontent JSON formatda bo‘lmasa, ingliz tilida ishlaydi
            $product->description = strip_tags($product->description);
        }
    }
}
