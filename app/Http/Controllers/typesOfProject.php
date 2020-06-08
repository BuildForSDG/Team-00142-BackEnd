<?php

namespace App\Http\Controllers;

use App\projectDetail;
use App\typeOfProject;
use Illuminate\Http\Request;
use  App\Http\Resources\typeOfProject\TypeOfProjectResourceCollection;
use App\Http\Resources\typeOfProject\TypeOfProjectResource;

class typesOfProject extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $typesP =  TypeOfProjectResourceCollection::collection(projectDetail::where('typeOfProjectId',$id)->paginate(5));
        return response()->json($typesP);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\projectDetail  $projectDetail
     * @return \Illuminate\Http\Response
     */
    public function show($id, projectDetail $projectDetail)
    {
        return new TypeOfProjectResource($projectDetail);
        // return $projectDetail;
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
    public function update(Request $request, $id, projectDetail $projectDetail)
    {

        // ! this section of the code will be used to update a single project.
        // * seeing if the files are set . 
        if ($request->hasFile('financialDocumentation')) {

            $name = pathinfo($request->file('financialDocumentation')->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = pathinfo($request->file('financialDocumentation')->getClientOriginalName(), PATHINFO_EXTENSION);
            $storageName = $name . time() . '.' . $extension;
            $request->file('financialDocumentation')->storeAs('public/FinancialDocuments', $storageName);
            $projectDetail->financialBreakDownDocumentLocation =  'public/storage/FinancialDocuments/' . $storageName;
        }
        if ($request->hasFile('businessCaeDocumentation')) {
            $name = pathinfo($request->file('businessCaeDocumentation')->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = pathinfo($request->file('businessCaeDocumentation')->getClientOriginalName(), PATHINFO_EXTENSION);
            $storageName = $name . time() . '.' . $extension;
            $request->file('financialDocumentation')->storeAs('public/BuinessCaseDocuments', $storageName);
            $projectDetail->businessCaseDocumentLocation = 'public/storage/BuinessCaseDocuments/' . $storageName;
        }

        $projectDetail->projectName = $request->projectName;
        $projectDetail->typeOfProjectId = $request->typeOfProject;
        $projectDetail->projectDemographicId = $request->projectDemographic;
        $projectDetail->projectDetails = $request->projectDetails;
        $projectDetail->typeOfAssistanceRequiredId = $request->typeOfAssistanceRequired;
        $projectDetail->projectProposerId = $request->projectProposer;

        $projectDetail->save();

        return response(null, 201);

        // return $request;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\projectDetail  $projectDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, projectDetail $projectDetail)
    {
        $projectDetail->delete();
        return response(null, 204);
    }
}
