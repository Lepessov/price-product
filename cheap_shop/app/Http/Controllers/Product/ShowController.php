<?php

namespace App\Http\Controllers\Product;
use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductComment;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Product $product) {
         $shop = Shop::where('id',$product->shop_id)->first()->title;
         $category = Category::where('id',$product->category_id)->first()->title;
         $comments = ProductComment::where('product_id',$product->id)->get();

         return view('products.show',compact('product','shop','category','comments'));
    }
}

