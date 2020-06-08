<?php

namespace App\Http\Controllers;

use App\Http\Requests\createProjectProposer;
use App\Http\Resources\Project_Proposer\ProjectProposerResource;
use App\projectProposer;
use Illuminate\Http\Request;

class ProjectProposerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projectP = ProjectProposerResource::collection(projectProposer::all());
        return response()->json($projectP);
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
    public function store(createProjectProposer $request)
    {
        $projProposer = new projectProposer();
        $projProposer->phoneNumber = $request->phoneNumber;
        $projProposer->email = $request->email;
        $projProposer->nationalId = $request->nationalId;
        $projProposer->name = $request->name;

        $projProposer->save();

        return;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\projectProposer  $projectProposer
     * @return \Illuminate\Http\Response
     */
    public function show(projectProposer $projectProposer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\projectProposer  $projectProposer
     * @return \Illuminate\Http\Response
     */
    public function edit(projectProposer $projectProposer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\projectProposer  $projectProposer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, projectProposer $projectProposer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\projectProposer  $projectProposer
     * @return \Illuminate\Http\Response
     */
    public function destroy(projectProposer $projectProposer)
    {
        //
    }
}
