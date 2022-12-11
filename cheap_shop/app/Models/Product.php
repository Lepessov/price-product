<?php

namespace App\Models;

use App\Filters\QueryFilter;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id;
 * @property int $shop_id;
 * @property int $category_id;
 * @property string $title:
 * @property string|null $image;
 * @property int $price;
 * @property int $new_price;
 * @property boolean $is_onSale;
 * @property string|null $description;
 *
 * @property Carbon $created_at;
 * @property Carbon $updated_at;
 */
class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_id',
        'category_id',
        'title',
        'image',
        'price',
        'new_price',
        'is_onSale',
        'description'
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
