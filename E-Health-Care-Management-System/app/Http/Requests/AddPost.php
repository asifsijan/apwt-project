<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddPost extends FormRequest
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
    public function rules()
    {
        return [

            'inner_air' => 'required',
            'ambulance_type' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|bail',
            'rate' => 'required|numeric|bail',
            'phone' => 'required|numeric|bail',
            'features' => 'required'
        ];
    }


     public function messages(){
        return [

            'inner_air.required' => "**Select inner air system type**",
            'ambulance_type.required' => "**Select Ambulance type**",
            'image.required' => "**Upload Ambulance Photo**",
            'image.image' => "**Only (jpeg,png,jpg,gif) File Supported**",
            'image.mimes' => "**File Type Must Be(jpeg,png,jpg,gif)**",
            'rate.required' => "**Give A Phone NO**",
            'rate.numeric' => "**Rate Must Be Numeric Data**",
            'phone.required' => "**Give Your Phone NO**",
            'phone.numeric' => "**Pnone No Must Be Numeric Data**",
            'features.required' => "**Write Some features About The Ambulance**"


        ];
    }
}
