<?php

namespace App\Http\Controllers;

use App\Http\Requests\createAssistanceType;
use App\Http\Resources\Project_Assistance\ProjectAssistanceResource;
use App\typeOfAssistance;
use Illuminate\Http\Request;

class TypeOfAssistanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeA = ProjectAssistanceResource::collection(typeOfAssistance::all());
        return response()->json($typeA);
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
    public function store(createAssistanceType $request)
    {
        $assistanceType = new typeOfAssistance();
        $assistanceType->assistanceName = $request->assistanceName;

        $assistanceType->save();
        return;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\typeOfAssistance  $typeOfAssistance
     * @return \Illuminate\Http\Response
     */
    public function show(typeOfAssistance $typeOfAssistance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\typeOfAssistance  $typeOfAssistance
     * @return \Illuminate\Http\Response
     */
    public function edit(typeOfAssistance $typeOfAssistance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\typeOfAssistance  $typeOfAssistance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, typeOfAssistance $typeOfAssistance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\typeOfAssistance  $typeOfAssistance
     * @return \Illuminate\Http\Response
     */
    public function destroy(typeOfAssistance $typeOfAssistance)
    {
        //
    }
}
