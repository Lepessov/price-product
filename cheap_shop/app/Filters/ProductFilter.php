<?php

namespace App\Filters;
use App\Models\Product;

class ProductFilter extends QueryFilter{


    /**
     * @param array|null $id
     * category_id method will only work when array id is not empty
     * @return mixed
     */
    public function category_id($id = null){
        return $this->builder->when($id, function($query) use($id){
            $query->whereIn('category_id', $this->paramToArray($id));
        });
    }
    public function shop_id($id=null){
        return $this->builder->when($id, function($query) use($id){
            $query->whereIn('shop_id', $this->paramToArray($id));

        });
    }
    public function sort($id=null){
        return $this->builder->when($id,function ($query) use($id){
            $query->orderBy('price',$id);
        });
    }
    public function search_field($search = ''){
        return $this->builder
            ->where('title', 'LIKE', '%'.$search.'%');
    }




    }

