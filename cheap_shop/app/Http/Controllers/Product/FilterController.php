<?php

namespace App\Http\Controllers\Product;
use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function __invoke(Request $request, $id) {
       $query = Product::query();
      $products= $query->where('category_id', $id)->get();
      

       return view('products.filtered', compact('products')); 
    }

   
}

