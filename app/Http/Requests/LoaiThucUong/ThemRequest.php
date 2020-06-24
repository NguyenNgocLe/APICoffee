<?php

namespace App\Http\Requests\LoaiThucUong;

use Illuminate\Foundation\Http\FormRequest;

class ThemRequest extends FormRequest
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
            'ten_loai_thuc_uong' => 'bail|required|min:1|max:20|regex://' 
        ];
    }

    public function messages() {
        return [
            'ten_loai_thuc_uong.required' => 'Tên loại thức uống không được trống!',
            'ten_loai_thuc_uong.min'      => 'Vui lòng nhập tên loại thức uống lớn hơn 1 ký tự!',
            'ten_loai_thuc_uong.max'      => 'Vui lòng nhập tên loại thức uống ít hơn 20 ký tự!'
        ];
    }

}
