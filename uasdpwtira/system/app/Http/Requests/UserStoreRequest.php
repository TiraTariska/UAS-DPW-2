<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'nama' => 'required',
            'username' => 'required|unique:user,username',
            'email' => 'required|email:rfc,dns',
            'password' => 'required',
            'no_handphone' => 'required'
        ];
    }

    function messages(){
        return [
            'nama.required' => 'Field Nama Wajib Diisi',
            'username.required' => 'Field Username Wajib Diisi',
            'username.unique' => 'Username Tersebut Telah Terdaftar',
            'email.required' => 'Field Email Wajib Diisi',
            'password.required' => 'Field Paassword Wajib Diisi',
            'no_handphone.required' => 'Field Nomor Handphone Wajib Diisi'
        ];

    }

}
