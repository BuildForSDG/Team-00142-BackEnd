<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\projectDetail;
use App\Http\Requests\createProjectDetails;
use App\projectProposer;

class phaseOneRegistration extends Controller
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

        return $data;
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
        //

        $projProposer = new projectProposer();
        $projProposer->phoneNumber = $request->phoneNumber;
        $projProposer->email = $request->email;
        $projProposer->nationalId = $request->nationalId;
        $projProposer->name = $request->name;

        $projProposer->save();

        $projectPropserIds = projectProposer::where('email', $request->email)->get();

        if (count($projectPropserIds) == 1) {

            $pDetails = new projectDetail();
            $pDetails->projectName = $request->projectName;
            $pDetails->type_of_projects_id = $request->type_of_projects_id;
            $pDetails->projectDemographic = $request->projectDemographic;
            // $pDetails->projectDetails = $request->projectDetails;
            $pDetails->typeOfAssistanceRequiredId = $request
                ->typeOfAssistanceRequiredId;
            $pDetails->projectProposerId =  $request->email;

            // $pDetails->financialBreakDownDocumentLocation = $request->financialBreakDownDocumentLocation;
            // $pDetails->busnessCaseDocumentLocation = $request->businessCaseDocumentLocation;
            // $pDetails->asistanceRequiredToRefineDocuments = $request->asistanceRequiredToRefineDocuments;

            // $pDetails->approved = $request->approved;
            // $pDetails->approvedById = $request->approvedById;

            $pDetails->save();

            // email.... 

        } else {

            return respone('Error in email', 203);
        }
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
