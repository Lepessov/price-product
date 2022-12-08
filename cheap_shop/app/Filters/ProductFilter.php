<?php
namespace App\Filters;
use App\Models\Product;

class ProductFilter extends QueryFilter{

    public function category_id($id = null){
        return $this->builder->when($id, function($query) use($id){
            $query->whereIn('category_id', $this->paramToArray($id));
        });
    }
    public function shop_id($id=null){
        return $this->builder->when($id, function($query) use($id){
            $query->whereIn('shop_id', $this->paramToArray($id));
        });    }




    }

