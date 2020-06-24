<?php

namespace App\Http\Requests\NguyenLieu;

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
            'ten_nguyen_lieu' => 'bail|required|min:1|max:20|regex://',
            'don_gia'         => 'bail|required|min:1|max:20|regex://',
            'don_vi_tinh'     => 'bail|required|regex://',
            'so_luong_ton'    => 'bail|required|regex://',
        ];
    }

    public function messages() {
        return [
            'ten_nguyen_lieu.required' => 'Tên nguyên liệu không được trống!',
            'ten_nguyen_lieu.min'      => 'Vui lòng nhập tên nguyên liệu lớn hơn 1 ký tự!',
            'ten_nguyen_lieu.max'      => 'Vui lòng nhập tên nguyên liệu ít hơn 20 ký tự!',
            'don_gia.required'         => 'Đơn giá không được trống!',
            'don_gia.min'              => 'Vui lòng nhập đơn giá lớn hơn 1 chữ số!',
            'don_gia.max'              => 'Vui lòng nhập đơn giá ít hơn 20 chữ số!',
            'don_vi_tinh.required'     => 'Đơn vị tính không được trống!',
            'so_luong_ton.required'    => 'Số lượng tồn không được trống!'
        ];
    }
}
