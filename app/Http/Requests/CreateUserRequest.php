<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
 use Illuminate\Foundation\Auth\RegistersUsers;

class CreateUserRequest extends FormRequest
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
       'nom' => 'required',
       'prenom' => 'required',
       'email' => 'required',
       'password' => 'required|confirmed',
       'password_confirmation' => 'required',
       'datenaissance' => 'required',
        ];
    }
}
