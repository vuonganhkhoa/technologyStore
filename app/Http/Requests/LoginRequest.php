<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'username' => 'required|email',
            'password' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'username.required' => 'Bạn cần nhập tên đăng nhập.',
            'username.email' => 'Tên đăng nhập của bạn phải là email.',
            'password.required' => 'Bạn cần nhập mật khẩu.'
        ];
    }

}
