<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\projectDetail;
Use\App\User;
// use App\projectDetail;
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
    public function store(Request $request)
    {    
        $projectDetail =  projectDetail::where('id','=',$request->projectId)->get();
        foreach ($projectDetail as $projectDetail) {
            # code...
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
    
            
            
            $projectDetail->approved = 0;
            $projectDetail->projectDetails = $request->projectDetails;
            $projectDetail->typeOfAssistanceRequiredId = $request->typeOfAssistanceRequiredId;
            $projectDetail->asistanceRequiredToRefineDocuments = $request->asistanceRequiredToRefineDocuments;
    
            $projectDetail->save();
    
            return response(null, 200);
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
