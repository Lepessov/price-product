<?php

namespace App\Http\Controllers\PostComment;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductComment\StoreRequest;
use App\Models\ProductComment;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        // error_message если user_id или post_id указанные юзером не верные тогда возвращает ошибку
        if(Product::where('id', $data['post_id'])->first() == null || User::where('id', $data['user_id'])->first() == null) {
            $error_message= "user_id or post_id is wrong.";
        }

        ProductComment::create($data);
        if($error_message !== null) {
            return view('products.show',compact('error_message'));
        }

        return back();
    }
}
