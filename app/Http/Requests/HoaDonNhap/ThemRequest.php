<?php

namespace App\Http\Requests\HoaDonNhap;

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
            'nhan_vien_id' => 'bail|required|min:1|max:10|regex://',
            'ngay_nhap'    => 'bail|required|regex://',
            'tong_tien'    => 'bail|required|min:1|max:10|regex://'
        ];
    }

    public function messages() {
        return [
            'nhan_vien_id.required' => 'Tên nhân viên không được trống!',
            'nhan_vien_id.min'      => 'Vui lòng nhập tên nhân viên lớn hơn 1 ký tự!',
            'nhan_vien_id.max'      => 'Vui lòng nhập tên nhân viên ít hơn 20 ký tự!',
            'ngay_nhap.required'    => 'Ngày nhập không được bỏ trống!',
            'tong_tien.required'    => 'Tổng tiền không được bỏ trống!',
            'tong_tien.min'         => 'Vui lòng nhập tổng tiền lớn hơn 1 ký tự!',
            'tong_tien.max'         => 'Vui lòng nhập tổng tiền ít hơn 20 ký tự!'
        ];
    }
}
