<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LatestNewsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() 
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'heading.required'          => 'Heading is required',
            'description.required'      => 'Description is required',
            'written_by.required'        => 'Written By is required',
        ];
    }

    public function rules()
    {
        return [
            'heading'                   => 'required',
            'description'               => 'required',
            'written_by'                 => 'required',
       ];
    }
}
