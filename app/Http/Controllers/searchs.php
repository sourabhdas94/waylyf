<?php

namespace App\Http\Controllers;
use App\Search;
use Illuminate\Http\Request;

class searchs extends Controller
{
    public function submit(Request $req){
        
        $post = new Search;
        $post -> id = $req->id;
        $post -> name = $req->name;
        $post -> state = $req->state;
        $post -> city = $req->city;
        $post -> addr = $req->addr;
        $post -> pincode = $req->pincode;
        $post -> dob = $req->dob;
        $post -> mob = $req->mob;
        $post -> blood_group = $req->blood_group;
       
        $post -> save();
        return view('search'); 

    }
}