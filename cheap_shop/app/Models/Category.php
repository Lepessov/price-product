<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
* @property int $id;
* @property string $title;
*
* @property Carbon $created_at;
* @property Carbon $updated_at;
 */
class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
    ];
    public function products(){
        return $this->hasMany(Product::class);
    }
}
