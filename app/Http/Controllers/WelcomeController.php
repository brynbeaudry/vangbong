<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\UserVessel;
use Illuminate\Support\Facades\Storage;

class WelcomeController extends Controller
{
    //
    public function index(){
      $articles = Article::all();
      $ignite1 = Storage::disk('local')->get('bongs/ignite-bongs-glass.json');
      $ignite1 = rtrim(preg_replace('/\\n/', ' ', $ignite1));
      $sponsorVessels = collect(json_decode($ignite1, true));
      return view('welcome',compact('sponsorVessels', 'articles'));
    }
}
