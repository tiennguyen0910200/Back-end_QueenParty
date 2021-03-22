<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public function user(){
    	return $this->hasMany("App\Comment","user_id","id");
    }
    use HasFactory;
    protected $table = "users";
}
