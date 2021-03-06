<?php

namespace App\Http\Controllers;
use App\UserVessel;
use App\User;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class UserVesselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   /*  Need: 'id','name','description','imagePath', 'ownerId',
      vessels = \App\UserVessel::all();
        //TODO return view file once Front End completes it
        return view('friends', compact('acceptedFriends', 'incomingRequests'));

    ['products' => Product::all()]
        */
        $vessels = UserVessel::all();
        $index = "This is the Index";
        //index of all user vessels
        //with vessels!

        //********** localhost:8000/vessels   with return this page with this data

        //you can use the same posts.userVessel for showing 1, it'lll just use less data. you can change the oage if there is just one vessl
        return view('uservessels.all',compact('vessels', 'index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //localhost:8000/vessels/create   with return this page with this data
        return view('posts.newuservessel');

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        //dd($data);
         $validator = Validator::make($data, [
          'title' => 'required|max:255',
          'description' => 'required|max:255',
          'ownerId' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('uservessels/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        // create new image with transparent background color
        //uses autoheight
        $rnd_str = str_random(20);
        $data_url = $request->img;
        //dd($data_url);
        //$request->file('image')->extension()
        $tmp_path = "/tmp/$rnd_str." . "png";
        $tmp_url = public_path($tmp_path);
        $local = Image::make($data_url)
        ->fit(640, 640, function ($constraint) {
                $constraint->upsize();
        })
        ->save($tmp_url);
        if(Image::make($tmp_url)->exif() !== null)
          $local =  Image::make($tmp_url)->orientate()->save();
        //dd("In temp", $exif, $data);
        $img = (string) $local->encode('data-url', 100);
        if(file_exists($tmp_url)){
            unlink($tmp_url);
        }else{
            echo 'file not found';
        }

        //dd($img->filesize(), $img->height(), $img->width());

        //$img = (string) $img;

        $userVessel = UserVessel::create([
            'title' => $request->title,
            'description' => $request->description,
            'img' => $img,
            'ownerId' => $request->ownerId,
        ]);

        return redirect()->route('vessels.show', ['id'=> $userVessel->id]);

    }

    /**
     * Display the specified resource.
     * show pages for id
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vessel = UserVessel::findOrFail($id);
        $owner = User::findOrFail($vessel->ownerId);
        return view('uservessels.one', compact('owner','vessel'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //get's image by id
    public function image($id){
      $userVessel = UserVessel::findOrFail($id);
      $img = Image::make(file_get_contents($userVessel->img));
      $response = $img->response()->header('Content-Type', $img->mime());
      return $response;
    }
}
