<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class mycontroller extends Controller
{
    function insert(Request $req)
    {
          $name=$req->get('pname');
          $price=$req->get('pprice');
         $pimage = $req->file('image')->getClientOriginalName();
        
            // echo $pimage;
            //$req->image->move(public_path('images'),$pimage);
           // $destinationPath = public_path('images');
            //move uploaded file
           // $req->image->move($destinationPath,$pimage);
             
           // $prod = new product();
           // $prod->PPrice = $price;
           // $prod->PName = $name;
           // $prod->PImage = $pimage;
           // $prod->save();
        
      //  } else {
            // Handle the case when no file was uploaded
        //   $req->image->move($destinationPath,$pimage);
       //}
        
// //move uploaded file
 $req->image->move(public_path('images'),$pimage);
             
  $prod = new product();
  $prod->PName = $name;
  $prod->PPrice = $price;
  $prod->PImage = $pimage;
  $prod->save();
  return redirect('/ ');
      }

 function readdata()
 {
        $pdata = product::all();
        return view('insertRead',['data'=> $pdata]);
  }
    function updateordelete(Request $req)
    {

         $id= $req->get('id');
         $name= $req->get('name');
          $price= $req->get('price');
         //echo $image =$req->get('image')
        if($req->get('update') == 'Update'){
            return view('updateview',['pid'=> $id, 'pname'=> $name,'pprice'=> $price]);
        }
        else{
          echo $prod = product::find($id);
          $prod ->delete();
        }
        return redirect('/');
    }
    function update(Request $req){
        $ID =$req->get('id');
        $Name =$req->get('name');
        $Price =$req->get('price');
        $prod = product::find($ID);
        $prod->PName=$Name;
        $prod->PPrice=$Price;
        $prod->save();
        return redirect('/');
      }
}

