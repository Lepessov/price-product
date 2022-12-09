<?php

namespace App\Models;

use App\Filters\QueryFilter;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_id',
        'category_id',
        'title',
        'image',
        'price',
    ];

    public function categories(){
        return $this->belongsTo(Category::class);
    }
    public function shops(){
        return $this->belongsTo(Shop::class);
    }

    public function scopeFilter(Builder $builder,QueryFilter $filter){
        return $filter->apply($builder);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function productComments()
    {
        return $this->hasMany(ProductComment::class);
    }
}
