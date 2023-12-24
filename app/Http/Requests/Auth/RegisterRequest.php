<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'unique:users'],
            'phone_number' => ['required'],
            'password' => ['required', 'min:6'],
            'confirm_password' => ['required','same:password'],

        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Trường họ tên không được để trống.',
            'email.required' => 'Trường email không được để trống',
            'email.email' => 'Trường email của khách hàng phải là một địa chỉ email hợp lệ.',
            'email.unique' => 'Email của bạn đã tồn tại',
            'phone_number.required' => 'Trường số điện thoại không được để trống',
            'password.required' => 'Trường mật khẩu không được để trống',
            'password.min' => 'Trường mật khẩu phải có ít nhất 6 ký tự.',
            'confirm_password.required' => 'Trường nhập lại mật khẩu không được để trống',
            'confirm_password.same:password' => 'Trường mật khẩu xác nhận phải khớp với mật khẩu.'
        ];
    }
}
