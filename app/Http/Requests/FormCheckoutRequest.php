<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;


class FormCheckoutRequest extends FormRequest
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
            'customer_name' => 'required',
            'customer_email' => ['required', 'email'],
            'customer_phone' => 'required',
            'customer_address' => 'required',
            'payment_method' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'customer_name.required' => 'Trường họ tên không được để trống.',
            'customer_email.required' => 'Trường email không được để trống',
            'customer_email.email' => 'Trường email của khách hàng phải là một địa chỉ email hợp lệ.',
            'customer_address.required' => 'Trường địa chỉ không được để trống',
            'customer_phone.required' => 'Trường số điện thoại không được để trống',
            'payment_method.required' => 'Vui lòng chọn phương thức thanh toán', 
        ];
    }
}
