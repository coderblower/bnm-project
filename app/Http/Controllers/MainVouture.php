<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainVouture extends Controller
{




        public function index(){
            var_dump("print len");
        }



    public function add(Request $request){
        return view("vouture.show");
    }
}
