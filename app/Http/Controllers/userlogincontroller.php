<?php

namespace App\Http\Controllers;
use App\Models\loginmodel;
use Illuminate\Http\Request;

class userlogincontroller extends Controller
{
    //
    function  index()
    {

        if(auth()->check()){
        $data =  loginmodel::get();  // select * from users

        return view('login.index', ['data' => $data]);
        }else{
            return redirect(url('/userlogin/login'));
        }
    }

    function Create()
    {
        return view('login.create', ['title' => "register"]);
    }


    function Store(Request $request)
    {
        // code ......

        $data = $this->validate($request, [
            "name"     => 'required',
            "password" => "required|min:6|max:10",
            "email"    => "required|email|unique:users",

        ]);





        $data['password'] = bcrypt($data['password']);

        $op =  loginmodel::create($data);

        if ($op) {
            $message = 'Raw Inserted';
        } else {
           $message = 'Error Try Again';
        }
        # Set Message Session ....
        session()->flash('Message',$message);

        return redirect(url('/userlogin/Create'));

    }
    function login(){

        return view('login.mylogin',['title' => "Login Page"]);

    }
    function DoLogin(Request $request){
        // code ....

         $data = $this->validate($request, [
               "email"    => "required|email",
               "password" => "required|min:6|max:10"
         ]);


           if(auth()->attempt($data)){

              return redirect(url('/userlogin/'));

           }else{

            session()->flash('Message',"Error In Your Data Try Again");

            return back();

           }

    }
}
