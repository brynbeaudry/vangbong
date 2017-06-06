<?php

namespace App\Http\Controllers;
use App\UserVessel;
use App\User;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Storage;


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
        dd($data);
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

        $file = $request->file('file');
        $ext = $file->guessClientExtension();
        $newId = DB::table('uservessels')->max('id');
        if($newId==null) $newId = 0;
        $newId++;

        $path = $file("{$newId}.{$ext}")->storeAs(
          'uservessels', $data->ownerId
        );
        Storage::setVisibility($path, 'public');

        $userVessel = UserVessel::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'img' => $path,
            'ownerId' => $data->ownerId,
        ]);

        return redirect('vessels/show/'.$userVessel->id);

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

        $user = User::find($userVessel->ownerId);
        return view('uservessels.one')->with([
                'title' => 'Bong Trade Post',
                'description' => 'Description of what they are trading',
                'imagePath' => 'userVesselImages/bong.jpg',
                'ownerName' => 'this is from UserVesselController@show'
            ]);

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
}
