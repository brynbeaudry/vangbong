<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $vessels = \App\UserVessel::all();
        $index = "This is the Index";
        //index of all user vessels
        //with vessels!

        //********** localhost:8000/vessels   with return this page with this data

        //you can use the same posts.userVessel for showing 1, it'lll just use less data. you can change the oage if there is just one vessl
        return view('posts.userVessel',compact('vessels', 'index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //localhost:8000/vessels/create   with return this page with this data
        return view('posts.newUserVessel');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

        if ($id == 1) {
            return view('posts.userVessel')->with([
                'title' => 'Bong Trade Post',
                'description' => 'Description of what they are trading',
                'imagePath' => 'userVesselImages/bong.jpg',
                'showOne' => 'this is from UserVesselController@show'
            ]);
        } else {
            return view('posts.userVessel')->with([
                'title' => 'Bong Trade Post 2',
                'description' => 'Another description of what they are trading',
                'imagePath' => 'userVesselImages/bong.jpg',
                'showOne' => 'this is from UserVesselController@show'
            ]);
        }
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
