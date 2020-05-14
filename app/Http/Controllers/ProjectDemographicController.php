<?php

namespace App\Http\Controllers;

use App\projectDemographic;
use Illuminate\Http\Request;
use App\Http\Resources\ProjectDemographicResource;
use App\Http\Resources\ProjectDemographicCollection;
use App\Http\Requests\createProjectDemographic;

class ProjectDemographicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //returning all instances of project Demographics Info
        return ProjectDemographicResource::collection(projectDemographic::paginate(10));
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
    public function store(createProjectDemographic $request)
    {
        // creating new project Demographics
        $newProjectDemo = new projectDemographic();
        $newProjectDemo->name=$request->name;      

        $newProjectDemo->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\projectDemographic  $projectDemographic
     * @return \Illuminate\Http\Response
     */
    public function show(projectDemographic $projectDemographic)
    {
        // display one record of project Demographic
        return new ProjectDemographicResource($projectDemographic);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\projectDemographic  $projectDemographic
     * @return \Illuminate\Http\Response
     */
    public function edit(projectDemographic $projectDemographic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\projectDemographic  $projectDemographic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, projectDemographic $projectDemographic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\projectDemographic  $projectDemographic
     * @return \Illuminate\Http\Response
     */
    public function destroy(projectDemographic $projectDemographic)
    {
        //
    }
}
