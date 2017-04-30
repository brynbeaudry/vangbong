<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProfileImageController extends Controller
{
    //
    public function store_image_return_path(Request $request){

      $file = $request->file('file');


      $ext = $file->guessClientExtension();
      $newId = DB::table('animals')->max('id');
      if($newId==null) $newId = 0;
      $newId++;

      $path = $file->move("images/{$newId}/profile" , "1.{$ext}");
      Storage::setVisibility($path, 'public');
      return $path;
    }
}
