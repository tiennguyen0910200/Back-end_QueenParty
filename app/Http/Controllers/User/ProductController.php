<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    function detail($id){
        $product = DB::table('products')->where("id",$id)->first();
        // $cate= ImageCategory::find($imagedetail->category_id);
        // $imagedetail->category_name = $cate->name;
       return json_encode($product);
      }
}
