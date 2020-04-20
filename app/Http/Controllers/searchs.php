<?php

namespace App\Http\Controllers;
use App\Search;
use App\Register;
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
        $post -> age = $req->age;
        $post -> lat = $req->lat;
        $post -> long = $req->long;
        $post -> dob = $req->dob;
        $post -> mob = $req->mob;
        $post -> blood_group = $req->blood_group;
       
        $post -> save();

        $datapass = [];
        $j = 0;
        $data = Register::all();
        foreach($data as $i){
            if(($i->city == $req->city) || ($i->pincode == $req->pincode) || ($i->blood_group == $req->blood_group)){
                $datapass[$j] = $i;
                $j = $j + 1;
            }
        }

        return view('/search', ['data' => $datapass]);    
        // return redirect('/search')->with('data', $datapass);
        
        
         

    }
}