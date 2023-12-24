<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormPostRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'content' => ['required', 'string', 'max:255'],
            'thumbnail' => ['required', 'image','max:2048'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Vui lòng nhập tiêu đề bài viết.',
            'name.string' => 'Trường tiêu đề là dạng chuỗi.',
            'description.required' => 'Vui lòng nhập trường mô tả.',
            'description.string' => 'Trường mô tả là dạng chuỗi.',
            'content.required' => 'Vui lòng trường nội dung.',
            'content.string' => 'Trường nội dung là dạng chuỗi.',
            'thumbnail.required' => 'Trường ảnh không được để trống.',
            'thumbnail.image' => 'File upload không hợp lệ.'
        ];
    }

}
