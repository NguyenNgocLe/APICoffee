<?php

namespace App\Http\Requests\ThucUong;

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
            'loai_thuc_uong_id' => 'bail|required|regex://',
            'ten_thuc_uong'     => 'bail|required|min:3|max:20|regex://',
            'hinh_anh'          => 'bail|required|regex://',
            'don_gia'           => 'bail|required|min:1|max:10|regex://'
        ];
    }

    public function messages() {
        return [
            'loai_thuc_uong_id.required' => 'Tên loại thức uống không được trống!',
            'ten_thuc_uong_id.required'  => 'Tên thức uống không được trống!',
            'ten_thuc_uong.min'          => 'Vui lòng nhập tên thức uống phải lớn hơn 1 ký tự!',
            'ten_thuc_uong.max'          => 'Vui lòng nhập tên thức uống phải ít hơn 20 ký tự!',
            'hinh_anh.required'          => 'Hình ảnh không được trống!'
        ];
    }
}
