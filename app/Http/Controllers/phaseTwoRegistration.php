<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\projectDetail;
Use\App\User;
use App\Http\Requests\createProjectDetails;

class phaseTwoRegistration extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataPhasetwo = projectDetail::all();

        return $dataPhasetwo;
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
    public function store(createProjectDetails $request)
    {
        $phaseTwo = new projectDetail();
        $phaseTwo->projectDetails=$request->projectDetails;
        $phaseTwo ->typeOfAssistanceRequiredId= $request->typeOfAssistanceRequiredId;
        $phaseTwo->financialBreakDownDocumentLocation=$request->financialBreakDownDocumentLocation;
        $phaseTwo->businessCaseDocumentLocation=$request->businessCaseDocumentLocation;
        $phaseTwo->asistanceRequiredToRefineDocuments=$request->asistanceRequiredToRefineDocuments;

        $phaseTwo->save();

        $approver = new User();
        $approver->approvedById = $request->id;

        $approver->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
