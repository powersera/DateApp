<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property string name
 * @property string surname
 * @property string password
 * @property string email
 * @property string dateOfBirth
 */
class RegistrationRequest extends FormRequest
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
            'name' => 'required|string|min:1|max:20',
            'surname' => 'required|string|min:1|max:20',
            'password' => 'required|min:3',
            'email' => 'required|unique:users,email',
            'dateOfBirth' => 'required|date',
        ];
    }
}
