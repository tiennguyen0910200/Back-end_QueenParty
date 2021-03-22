<?php

namespace App\Http\Controllers\User;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use \Firebase\JWT\JWT;

class CommentController extends Controller
 {
    function index(){
        $comment = DB::table('comments')->get();
        return json_encode($comment);
      }

    // function index(){
    //     $comment = Comment::all();
    //     return json_encode($comment);
    // }
    //   function getComment(){
    //       $user = DB::table('comments')->get();
  
    //       $user_cmt= Users::find($user->user_id);
    //       $user->id = $user_cmt->fullname;
    //        //echo  json_encode($newdetail, JSON_PRETTY_PRINT);
    //      return json_encode($user);
    // }


    //   function addComment(Request $request){
    //     $comment = $request->content;
    //     $id = $request->id;
    //     $user_id = $request->user_id;
    //     $key ="tien0910";
    //     $data = JWT::decode($user_id, $key, array('HS256'));
    //     $user_id = $data->user_id;
      
    //     DB::table('comments')->insert([
    //         'content'=>$comment,'id'=> $id, 'user_id'=>$user_id
    //     ]);
    //   }
}
