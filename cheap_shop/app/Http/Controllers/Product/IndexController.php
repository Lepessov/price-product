<?php
declare(strict_types=1);

namespace App\Http\Controllers\Product;
use App\Filters\ProductFilter;
use App\Http\Controllers\Controller;

use App\Http\Requests\Product\FilterRequest;
use App\Models\Area;
use App\Models\Category;
use App\Models\Product;
use App\Models\Shop;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(ProductFilter $filter) {
    $products=Product::filter($filter)->get();
    $categories= Category::all();
    $shops=Shop::all();


        return view('products.index',compact('categories','products','shops'));
    }


}

