<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\myblog;

class myblogcontroller extends Controller
{
     function  index(){

    $data =  myblog :: get();  // select * from users

    return view('blog.index',['data' => $data]);
}



function create(){
    return view('blog.create',['title' => "Create Student"]);
}


function store(Request $request){
 // code ......

 $data = $this->validate($request,[
     "title"     => 'required',
     "content" => "required|min:50",
     "image"    => "required|image|mimes:jpg,png,jpeg,gif,svg",

 ]);
 if ($request->hasFile('image')){
    $file = $request->file('image');
   $extension = $file->getClientOriginalExtension();
   $fileName = time().'.'.$extension;
   $path = public_path().'/uploads';
   $uplaod = $file->move($path,$fileName);
  }

$data['image']=$fileName;

      $op =  myblog :: create($data);

      if($op){
          dd('Raw Inserted');
      }else{
          dd('Error Try Again');
      }

}


}
