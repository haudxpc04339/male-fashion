<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormProductRequest extends FormRequest
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
            'name' => ['required','unique:products','max:50'],
            'description' => 'required',
            'price' => ['required', 'numeric', 'gt:1000'],
            'sale_price' => ['nullable', 'numeric', 'lte:price'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Vui lòng nhập tên sản phẩm.',
            'name.unique' => 'Tên sản phẩm đã tồn tại.',
            'description.required' => 'Vui lòng nhập trường mô tả.',
            'price.required' => 'Vui lòng trường giá sản phẩm.',
            'price.numeric' => 'Trường giá phải là một số.',
            'price.gt:1000' => 'Trường giá phải lớn hơn 1000.',
            'sale_price.numeric' => 'Trường giá khuyến mãi phải là một số.',
            'sale_price.lte' => 'Trường giá ưu đãi phải nhỏ hơn hoặc bằng giá gốc.',
        ];
    }
}
