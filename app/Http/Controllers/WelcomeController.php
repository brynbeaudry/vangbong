<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function index(){
      //$hi
      $sponsorVessels = array();
      return view('welcome',compact('sponsorVessels'));
    }
}
