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
      $articles_count = count($articles);
      $ignite1 = Storage::disk('local')->get('bongs/ignite-bongs-glass.json');
      $newsItems = Storage::disk('local')->get('news/van_sun_marijuana.json');
      //dd($newsItems, $ignite1);
      $ignite1 = rtrim(preg_replace("/\\n/", ' ', $ignite1));
      $newsItems = rtrim(preg_replace("/\\n/", ' ', $newsItems));
      //dd($newsItems, $ignite1);
      $sponsorVessels = collect(json_decode($ignite1, true));
      $newsItems = collect(json_decode($newsItems, true));
      //dd($newsItems, $sponsorVessels);
      return view('welcome',compact('sponsorVessels', 'articles', 'newsItems'));
    }
}
