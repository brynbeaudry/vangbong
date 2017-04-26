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
        //$file = Storage::get('public/json/bongs/ignite.json');
        //$sponsorVesselsJson = $files[0];
        //$sponsorVessels = json_decode(file_get_contents($file), true);
        //$userVessels = UserVessel::all();
        return view('home');
    }

}
