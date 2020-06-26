<?php

namespace App\Http\Requests\ThamSo;

use Illuminate\Foundation\Http\FormRequest;

class SuaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'ten_tham_so' => 'bail|required|min:1|max:20|regex://',
            'gia_tri'     => 'bail|required|min:1|max:20|regex://'
        ];
    }

    public function messages() {
        return [
            'ten_tham_so.required' => 'Tên tham số không được trống!',
            'ten_tham_so.min'      => 'Vui lòng nhập tên tham số lớn hơn 1 ký tự!',
            'ten_tham_so.max'      => 'Vui lòng nhập tên tham số ít hơn 20 ký tự!',
            'gia_tri.required'     => 'Giá trị không được trống!',
            'gia_tri.min'          => 'Vui lòng nhập giá trị lớn hơn 1 ký tự!',
            'gia_tri.max'          => 'Vui lòng nhập giá trị ít hơn 20 ký tự!',
        ];
    }
}
