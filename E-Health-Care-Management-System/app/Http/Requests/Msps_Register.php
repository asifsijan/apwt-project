<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Msps_Register extends FormRequest
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

            'fname' => "required|regex:/^[A-Za-z]+([\ A-Za-z]+)*/|min:3|max:30|bail",
            'user_name' => 'required|unique:users|min:3|max:30|bail',
            'email' => "required|email|unique:users|max:50|bail",
            'password' => 'required|min:6|bail',
            'cpassword' => 'required|same:password|bail',
            'date' => 'required',
            'nid' => 'required',
            'gender' => 'required',
            'blood_type' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|bail',
            'phone' => 'required|numeric|bail'
        ];
    }

    public function messages(){
        return [

            'fname.required' => "**Enter Your Full Name",
            'fname.regex' =>"**Use Alphabet(No Special Character Allowed",
            'fname.min' => "**Name Must Be At Least (3) Character",
            'fname.max' => "**Name Can't Contain More Than (30) Character",
            'user_name.required' => "**Enter A Username",
            'user_name.unique:users' => "**This User Name Is Allready Exists",
            'user_name.min' => "**User Name Must Be Atleast (3) Character",
            'user_name.max' => "**User Name Can't Contain More Than (30) Character",

            'email.required' => "**Enter Your Email Address",
            'email.email' => "**Enter A Valid Email Address",
            'email.unique.users' => "**This Email Id Is Allready Exists",
            'email.max' => "**Too Large Email Address",
            'password.required' => "**Set Your Password",
            'password.min' => "**PassWord Must Be Atleast (6) Character",
            'cpassword.required' => "**Confirm Your Password",
            'cpassword.same' => "**PassWord Mismatch",
            'date.required' => "**Enter Your Date of Birth",
            'nid.required' => "**Enter Your National Id Card No",
            'gender.required' => "**Select Your Gender",
            'blood_type.required' => "**Select Your Blood Group",
            'image.required' => "**Upload Your Photo",
            'image.image' => "**Upload (jpeg,png,jpg,gif) File",
            'image.mimes' => "**File Type Must Be(jpeg,png,jpg,gif)",
            'phone.required' => "**Give Your Phone NO",
            'phone.numeric' => "**Pnone No Must Be Numeric Data"
            //'phone.min' => "**Enter A Valid Phone No",
            //'phone.max' => "**Phone No Can't Contain More Than (15) Character"


        ];
    }
}
