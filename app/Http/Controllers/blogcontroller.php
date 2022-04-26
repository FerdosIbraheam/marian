<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class blogcontroller extends Controller
{

    function show()
    {
        return view('show');
    }

    function create(Request $request)
    {
        $errors =    $this->validate($request, [
            "title"     => "required|regex:/(^([a-zA-z]+)(\d+)?$)/u",
            "content" => "required|min:50",
            "image"    => "required|image|mimes:jpg,png,jpeg,gif,svg"
      ]);
      if ($request->hasFile('image')){
        $file = $request->file('image');
       $extension = $file->getClientOriginalExtension();
       $fileName = time().'.'.$extension;
       $path = public_path().'/uploads';
       $uplaod = $file->move($path,$fileName);
      }

      $title = $request->file('title');
      $content = $request->file('content');
      $minutes = 60;
      $response = new Response('Set Cookie');
      $response->withCookie(cookie('title', 'MyValue', $minutes));
        return view('error',["data"=>$errors]);
    }
}
