<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\room;

class UserController extends Controller
{
    public function index()
    {
        $data=array(
            "roomID"=>"",
            "roomDescription"=>"Available!",
            "roomCapacity"=>50,
            "dateFrom"=>"",
            "dateTo"=>""
        );
        return view(users.index, ['user'=>$data]);
    }
}
