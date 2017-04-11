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
        $vessels = \App\UserVessel::all();
        $acceptedFriends = $user->acceptedFriends();
        $incomingRequests = $user->friendsRequests();
        //TODO return view file once Front End completes it
        return view('friends', compact('acceptedFriends', 'incomingRequests'));

    ['products' => Product::all()]
        */
        $vessels = \App\UserVessel::all();
        //index of all user vessels
        return view('uservesselpostings');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //return view usserve
        if ($id == 1) {
            return view('uservesselpostings')->with([
                'title' => 'Bong Trade Post',
                'description' => 'Description of what they are trading',
                'imagePath' => 'userVesselImages/bong.jpg'
            ]);
        } else {
            return view('uservesselpostings')->with([
                'title' => 'Bong Trade Post 2',
                'description' => 'Another description of what they are trading',
                'imagePath' => 'userVesselImages/bong.jpg'
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
