<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class mycontroller extends Controller
{
    function insert(Request $req){
          $name=$req->get('pname');
          $price=$req->get('pprice');
          $pimage=$req->file('image')->GetClientOriginalName();
//move uploaded file
 $req->image->move(public_path('images'),$pimage);

 $prod = new product();
 $prod->PName = $name;
 $prod->PPrice = $price;
 $prod->PImage = $pimage;
 $prod->save();
 return redirect('/ ');



    }
    function readdata(){
        $pdata = product::all();
        return view('insertRead',['data'=>$pdata]);

    }
}
