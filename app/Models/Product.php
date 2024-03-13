<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
       'name',
       'slug',
       'short_description',
       'description',
       'regular_price',
       'sale_price',
       'SKU',
       'stock_status', 
       'featured',
       'quantity',
       'image',
       'images',
        'category_id',
        'brand_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function calculatePercentageOff()
    {
        if ($this->sale_price) {
            return round((($this->regular_price - $this->sale_price) / $this->regular_price) * 100);
        }

        return 0; // Return 0 if regular price is 0 or less to avoid division by zero.
    }
}
