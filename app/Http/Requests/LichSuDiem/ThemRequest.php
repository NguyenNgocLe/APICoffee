<?php

namespace App\Http\Requests\LichSuDiem;

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
            'khach_hang_id' => 'bail|required|min:1|max:10|regex://',
            'so_diem'       => 'bail|required|min:1|max:10|regex://'
        ];
    }

    public function messages() {
        return [
            'khach_hang_id.required' => 'Id khách hàng không được trống!',
            'khach_hang_id.min'      => 'Vui lòng nhập Id khách hàng lớn hơn 1 ký tự!',
            'khach_hang_id.max'      => 'Vui lòng nhập Id khách hàng ít hơn 10 ký tự!',
            'so_diem.required'       => 'Số điểm không được trống!',
            'so_diem.min'            => 'Vui lòng nhập Id số điểm lớn hơn 1 ký tự!',
            'so_diem.max'            => 'Vui lòng nhập Id số điểm ít hơn 10 ký tự!',
        ];
    }
}
