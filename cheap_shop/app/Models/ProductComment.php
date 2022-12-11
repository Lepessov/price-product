<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
* @property int $id;
* @property int $user_id;
* @property int $product_id;
* @property string $comment;
*
* @property Carbon $created_at;
* @property Carbon $updated_at;
 */
class ProductComment extends Model
{
    use HasFactory;

    protected $fillable = [
        '$comment',
    ];

    public function products()
    {
        $this->belongsTo(Product::class);
    }
    public function users()
    {
        $this->belongsTo(User::class);
    }
}
