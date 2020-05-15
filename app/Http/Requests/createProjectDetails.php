<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createProjectDetails extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // 'projectName' => 'required|min:5',
            // 'type_of_projects_id' => 'required|integer',
            // 'projectDemographic' => 'required|integer',
            // 'projectDetails'
        ];
    }
}
