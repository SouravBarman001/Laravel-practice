<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function loadView($user){

       
            try {
        
                return view('users1',['name'=>$user]);  //view name is testing but i have given testing1
        
              } catch (\Exception $e) {  //here we catch that exception file not found and handle it
        
                  return "Page not found";
        
          

      //  return view('users',['name'=>$user]);
    }}
}