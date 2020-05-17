<?php

namespace App\Http\Controllers;

use App\Http\Resources\Project_Type\ProjectTypeResource;
use App\typeOfProject;
use Illuminate\Http\Request;

class TypeOfProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ProjectTypeResource::collection(typeOfProject::all());
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
        $pType = new typeOfProject();
        $pType->name = $request->name;
        $pType->description = $request->description;

        $pType->save();

        return;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\typeOfProject  $typeOfProject
     * @return \Illuminate\Http\Response
     */
    public function show(typeOfProject $typeOfProject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\typeOfProject  $typeOfProject
     * @return \Illuminate\Http\Response
     */
    public function edit(typeOfProject $typeOfProject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\typeOfProject  $typeOfProject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, typeOfProject $typeOfProject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\typeOfProject  $typeOfProject
     * @return \Illuminate\Http\Response
     */
    public function destroy(typeOfProject $typeOfProject)
    {
        //
    }
}
