<?php

namespace App\Http\Controllers;

use App\photos;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        // ! this function is used to get the photos from a particular project. 
        $photos = photos::where('projectId',$id)->get();

        return $photos;
        if (count($photos) < 1) {
            # code...
            return response("There are no photos for this project.",200);
        } else {
            # code...
            return response($photos,200);
        }                
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
     *
     * @param  \App\photos  $photos
     * @return \Illuminate\Http\Response
     */
    public function show(photos $photos)
    {
        //! 
        // return "This is the return.";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\photos  $photos
     * @return \Illuminate\Http\Response
     */
    public function edit(photos $photos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\photos  $photos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, photos $photos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\photos  $photos
     * @return \Illuminate\Http\Response
     */
    public function destroy(photos $photos)
    {
        //
    }
}
