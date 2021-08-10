<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgencyRequest extends FormRequest
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
            'phone' => 'required|min:10|unique:agents,phone',
            'email' => 'required|email|unique:agents,email',
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
            'phone.min' => 'Số điện thoại ít nhất 10 kí tự',
            'phone.unique' => 'Số điện thoại đã tồn tại',
            'email.required' => 'Không được để trống',
            'email.unique' => 'Email đã tồn tại',
            'address.required' => 'Không được để trống',
            'manager.required' => 'Không được để trống'
        ];
    }
}
