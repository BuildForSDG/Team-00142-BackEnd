<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\projectDetail;
use App\Http\Requests\createProjectDetails;
use App\projectProposer;
use Mail;
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

        $projProposer = new projectProposer();
        $projProposer->phoneNumber = $request->phoneNumber;
        $projProposer->email = $request->email;
        $projProposer->nationalId = $request->nationalId;
        $projProposer->name = $request->name;

        // ! saving the photos.

        if ($request->hasFile('photo')) {

            $name = pathinfo(
                $request->file('photo')->getClientOriginalName(), PATHINFO_FILENAME
            );
            $extension = pathinfo(
                $request->file('photo')->getClientOriginalName(), PATHINFO_EXTENSION
            );
            $storageName = $name . time() . '.' . $extension;
            $request->file(
                'photo'
            )->storeAs(
                'public/ProjectProposerImages',
                $storageName
            );
            $projProposer->proposerImage 
                =  'public/storage/ProjectProposerImages/' . $storageName;
        }

        $projProposer->save();

        $projectPropserIds = projectProposer::where('email', $request->email)->get();

        if (count($projectPropserIds) == 1) {

            $pDetails = new projectDetail();
            $pDetails->projectName = $request->projectName;
            $pDetails->typeOfProjectId = $request->type_of_projects_id;
            $pDetails->projectDemographicId = $request->projectDemographic;
            $pDetails->projectProposerId =  $projProposer->id;
            $pDetails->save();
            
            
            // // ! this section will have the sending of emails functionality. 
            // $to_name = $projProposer->name;
            // $to_email = $projProposer->email;
            // $bodyOfMail = "To activate your Account, follow the link below.";
            // $data = array('name'=> $projProposer->name, 
            //               'body' => $bodyOfMail);
            // Mail::send(
            //     'emails.mail', $data, 
            // function($message) use ($to_name, $to_email) {
            //     $message->to($to_email, $to_name)
            //     ->subject('Riser Africa Activation Email.');
            //     $message->from('ngugigeorge697@gmail.com','Riser Africa Activation Email.');
            // });

            return response(null,200);
        } else {

            return respone('Error in email', 203);
        }
        // return $request;
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
