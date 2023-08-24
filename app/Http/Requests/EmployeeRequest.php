<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'SSN'=>'required|unique:employees|min:3|max:10',
            'Fname'=>'required|min:3|max:20|alpha',
            'Lname'=>'required|min:3|max:20|alpha',
            'Gender'=>'required|alpha',
            'dno'=>'numeric',
            'image'=>'image|nullable',
            'Email'=>'required|email'
        ];
    }
    public function messages(){
        return [
            'SSN.required'=>'SSN must be required',
            'SSN.unique'=>'SSN must be unique'

        ];
    }
}
