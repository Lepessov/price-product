<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
* @property int $id;
* @property string $title
*
* @property Carbon $created_at;
* @property Carbon $updated_at;
*/
class Area extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
    ];
    public function shops(){
        return $this->hasMany(Shop::class);
    }
}
