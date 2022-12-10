<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use const http\Client\Curl\Versions\ARES;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'area_id',
        'title',
    ];

    public function areas(){
        return $this->belongsTo(Area::class);
    }
}
