<?php

namespace App\Http\Controllers\Product;
use App\Http\Controllers\Controller;

use App\Models\Area;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Request $request) {
        $products = Product::all();
        $categories = Category::all();
        $areas = Area::all();

        return view('products.index', compact(['products', 'categories', 'areas']));
    }

   
}

