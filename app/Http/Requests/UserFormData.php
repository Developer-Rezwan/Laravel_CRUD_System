<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormData extends FormRequest
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
            // 'name' => 'required|string|min:6|max:20|unique:users',
            // 'email' => 'required|email|max:30|unique:users',
            // 'phone' =>   ['required', 'string','min:11','max:14', 'regex:/\+(9[976]\d|8[987530]\d|6[987]\d|5[90]\d|42\d|3[875]\d|2[98654321]\d|9[8543210]|8[6421]|6[6543210]|5[87654321]|4[987654310]|3[9643210]|3[70]|7|1)\d{1,14}$/'], 
            // 'password' => 'required|min:6|max:20|string'
        ];
    }
}
