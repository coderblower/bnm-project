<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainVouture extends Controller
{

    private $data = [
        [
            "id"=> 1,

        ]
    ]
    public function add(Request $request){
        return view("vouture.show");
    }
}
