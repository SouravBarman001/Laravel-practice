<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTTP;
class UserController extends Controller
{
    // function loadView($user){

       
    //         try {
        
    //             return view('users1',['name'=>$user]);  //view name is testing but i have given testing1
        
    //           } catch (\Exception $e) {  //here we catch that exception file not found and handle it
        
    //               return "Page not found";
        
          

    //   //  return view('users',['name'=>$user]);
    // }}


    // function loadView(){
    //   $data = ["sourav","razu","mitu"];
    //   return view('users',["names"=>$data]);
    // }

function index(){
$data = HTTP::get("http://reqres.in/api/users?page=1");
return view('users',['collection'=>$data['data']]);
}


}