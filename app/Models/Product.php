<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'price','petunjuk_pemakaian','komposisi','minimal_order', 'category_id', 'image'
    ];

    public function category()
{
    return $this->belongsTo(Category::class, 'category_id');
}


    // Accessor untuk mendapatkan URL gambar
    public function getImageUrlAttribute()
    {
        if ($this->image) {
            return asset('storage/products/' . $this->image);
        }
        return null;
    }
}