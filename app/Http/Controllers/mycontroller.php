<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class mycontroller extends Controller
{
    //
    function insert(Request $req){

     $name =   $req->get('pname');
     $price =   $req->get('pprice');
     $pimage =   $req->file('image')->getClientOriginalName();
     $req->image->move(public_path('images'), $pimage);

  $prod = new product();
  $prod->Pname =$name;
  $prod->PPrice =$price;
  $prod->PImage = $pimage;
  $prod->save();
  return redirect('/');

    }
    function readdata ()
    {
        $pdata = product::all();
        return view('insertRead',['data'=>$pdata]);

    }
 function Updateordelete(Request $req){
  $id=$req->get('id');
   $name=$req->get('name');
   $price=$req->get('price');
   if($req->get('Update') == 'Update') {
    return view('Updateview',['Pid'=>$id,'Pname'=>$name,'PPrice'=>$price]);
    }
    else{

        $prod = product::find($id);
        $prod-> delete();
    }

    return redirect('/');
 }

  function update(Request $req )
 {
    $ID=$req->get('id');
    $Name=$req->get('Name');
    $Price=$req->get('price');
     $prod = product::find($ID);
  $prod->Pname=$Name;
$prod->PPrice=$Price;
$prod->save();
    return redirect('/');
// remamper you have error herer

 }
}
