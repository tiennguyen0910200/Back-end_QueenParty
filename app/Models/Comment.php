<?php

namespace App\Models;
use App\Users;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = "comments";

    // function news(){
    //     return $this->hasMany("App\News","id","new_id");
    //  }
    function comment(){
        return $this->hasMany("App\Comment","user_id");
     }
}
