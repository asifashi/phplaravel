<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

class frontendcontroller extends Controller
{
    function homepage() {
        $a=5;
        $b=9;
        $c=$a+$b;
        $name='asif_k';
        $record=['red'];
        $status=rand(0,2);
        $newName = str_replace("_", " ", strtoupper($name));
        

       return view('welcome',compact('c','newName','record','status'));
    }
    function aboutus(){
        return view('about');
    }
    function contactme(){
        return view('contact');
    }
}
