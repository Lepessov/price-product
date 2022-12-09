<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductComment extends Model
{
    use HasFactory;

    public function products()
    {
        $this->belongsTo(Product::class);
    }
    public function users()
    {
        $this->belongsTo(User::class);
    }
}
