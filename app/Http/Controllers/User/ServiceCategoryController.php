<?php

namespace App\Http\Controllers\User;
use App\Models\ServiceCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ServiceCategoryController extends Controller
{
    function index(){
        $service = DB::table('service_category')
          ->take(4)
          ->orderBy('service_category.created_at', 'desc')
          ->get();
          return response()->json($service);

        
    }
}
