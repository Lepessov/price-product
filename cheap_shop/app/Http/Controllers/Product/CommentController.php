<?php

namespace App\Http\Controllers\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductComment\StoreRequest;
use App\Models\Area;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductComment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __invoke(Product $product,StoreRequest $request) {
        $data = $request->validated();
      $comment = new ProductComment();
      $comment->product_id=$product->id;
      $comment->user_id=$data['user_id'];
      $comment->comment=$data['comment'];
      $comment->save();
      return  redirect()->back();


    }


}

