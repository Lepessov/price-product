<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'shop_id',
        'category_id',
        'title',
        'image',
        'price',
    ];

    public function categories(){
        return $this->hasOne(Category::class);
    }
    public function shops(){
        return $this->hasMany(Shop::class);
    }
}
