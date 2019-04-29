<?php

namespace App\Http\Requests;    

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
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
            'address.required'      => 'Address is required',
            'email.required'        => 'The Email is required',
            'mobile.required'       => 'The Mobile is required',
            'phoneno.required'      => 'The Phone Number is required',
            'googlemapsrc.required' => 'Google address is required',
        ];
    }

    public function rules()
    {
        return [
            'googlemapsrc'          => 'required',
            'address'               => 'required',
            'email'                 => 'required|email',
            'mobile'                => 'required|numeric',
            'phoneno'               => 'required|numeric',
       ];
    }
}
