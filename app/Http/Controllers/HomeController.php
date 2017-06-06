<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserVessel;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function loadJSON($filename) {
    $path = storage_path() . "/json/${filename}.json"; // ie: /var/www/laravel/app/storage/json/filename.json
    if (!File::exists($path)) {
        throw new Exception("Invalid File");
    }

    $file = File::get($path); // string

    // Verify Validate JSON?

    // Your other Stuff

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $ignite1 = Storage::disk('local')->get('bongs/ignite-bongs-glass.json');
        $ignite2 = Storage::disk('local')->get('bongs/ignite-mult-pages.json');
        //dd($ignite);
        $ignite1 = rtrim(preg_replace('/\\n/', ' ', $ignite1));
        $ignite2 = rtrim(preg_replace('/\\n/', ' ', $ignite2));
        $sponsorVessels = collect(json_decode($ignite1, true));
        $sponsorVessels = $sponsorVessels->merge(collect(json_decode($ignite2, true)))->values();
        //$userVessels = UserVessel::all();
        //dd($sponsorVessels);
        return view('home', compact('sponsorVessels'));
    }

}
