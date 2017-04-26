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
        $ignite = Storage::get('public/json/bongs/ignite.json');

        //DD($ignite);
        $sponsorVessels = json_decode($ignite, true);
        //$userVessels = UserVessel::all();
        //DD($sponsorVessels);
        return view('home', compact('sponsorVessels'));
    }

}
