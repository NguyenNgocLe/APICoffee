<?php

namespace App\Http\Requests\ThucUong;

use Illuminate\Foundation\Http\FormRequest;

class DanhSachRequest extends FormRequest
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
            'gioiHan' => 'bail|required|min:1|max:10|regex://',
            'trang'   => 'bail|required|min:1|max:10|regex://'
        ];
    }

    public function messages() {
        return [
            'gioiHan.required' => 'Giới hạn thức uống không được trống!',
            'gioiHan.min'      => 'Vui lòng nhập giới hạn thức uống lớn hơn 1!',
            'gioiHan.max'      => 'Vui lòng nhập giới hạn thức uống ít hơn 10!',
            'trang.required'   => 'Trang không được trống!',
            'trang.min'        => 'Vui lòng nhập số trang lớn hơn 1 ký tự!',
            'trang.max'        => 'Vui lòng nhập số trang lớn ít 20 ký tự!'
        ];
    }
}
