<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function testRequest(Request $req){
        //return view('form');
       return $req->input();
    }
}
