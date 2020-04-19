<?php

namespace App\Http\Controllers;
use App\Register;


use Illuminate\Http\Request;

class registers extends Controller
{
    public function submit(Request $req)
    {
        $post = new Register;
        $post -> id = $req->id;
        $post -> name = $req->name;
        $post -> state = $req->state;
        $post -> city = $req->city;
        $post -> addr = $req->addr;
        $post -> donated = $req->donated;
        $post -> gender = $req->gender;
        $post -> pincode = $req->pincode;
        $post -> dob = $req->dob;
        $post -> mob = $req->mob;
        $post -> blood_group = $req->blood_group;
        //user photo
        if($req->hasfile('image_upload')){
            $file = $req->file('image_upload');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/', $filename);
            $post->image_upload = $filename;
        }else{
            return $req;
            $post->image = '';
        }

        //identity proof
        if($req->hasfile('id_proof')){
            $file = $req->file('id_proof');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/identity', $filename);
            $post->id_proof = $filename;
        }else{
            return $req;
            $post->image = '';
        }
     
        $post -> save();
        return view('register');
    }
}
