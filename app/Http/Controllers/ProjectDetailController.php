<?php

namespace App\Http\Controllers;

use App\Http\Requests\createProjectDetails;
use App\Http\Resources\Project_Details\ProjectDetailsResource;
use App\projectDetail;
use Illuminate\Http\Request;

class ProjectDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return ProjectDetailsResource::collection(projectDetail::all());
        $data = projectDetail::all();

        return response()->json($data);
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
        $pDetails = new projectDetail();
        $pDetails->projectName = $request->projectName;
        $pDetails->type_of_projects_id = $request->type_of_projects_id;
        $pDetails->projectDemographic = $request->projectDemographic;
        $pDetails->projectDetails = $request->projectDetails;
        $pDetails->typeOfAssistanceRequiredId = $request->typeOfAssistanceRequiredId;
        $pDetails->projectProposerId = $request->projectProposerId;
        // $pDetails->financialBreakDownDocumentLocation = $request->financialBreakDownDocumentLocation;
        // $pDetails->businessCaseDocumentLocation = $request->businessCaseDocumentLocation;
        // $pDetails->asistanceRequiredToRefineDocuments = $request->asistanceRequiredToRefineDocuments;
        // $pDetails->approved = $request->approved;
        // $pDetails->approvedById = $request->approvedById;

        // $pDetails->save();

        return response([
            null
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\projectDetail  $projectDetail
     * @return \Illuminate\Http\Response
     */
    public function show(projectDetail $projectDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\projectDetail  $projectDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(projectDetail $projectDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\projectDetail  $projectDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, projectDetail $projectDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\projectDetail  $projectDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(projectDetail $projectDetail)
    {
        //
    }
}
