<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateRequest extends FormRequest
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
            'name' => 'required|min:5',
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'manager' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Không được để trống',
            'name.min' => 'Ít nhất 5 kí tự',
            'phone.required' => 'Không được để trống',
            'email.required' => 'Không được để trống',
            'address.required' => 'Không được để trống',
            'manager.required' => 'Không được để trống'
        ];
    }
}
