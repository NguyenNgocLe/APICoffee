<?php

namespace App\Http\Requests\HoaDonBan;

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
            'nhan_vien_id'  => 'bail|required|min:1|max:20|regex://',
            'khach_hang_id' => 'bail|required|min:1|max:20|regex://',
            'ngay_ban'      => 'bail|required|min:1|max:20|regex://',
            'tong_tien'     => 'bail|required|min:1|max:20|regex://',
            'diem'          => 'bail|required|min:1|max:20|regex://',
        ];
    }

    public function messages() {
        return [
            'nhan_vien_id.required'  => 'Tên nhân viên không được trống!',
            'nhan_vien_id.min'       => 'Vui lòng nhập tên nhân viên lớn hơn 1 ký tự!',
            'nhan_vien_id.max'       => 'Vui lòng nhập tên nhân viên ít hơn 20 ký tự!',
            'khach_hang_id.required' => 'Tên khách hàng không được trống!',
            'khach_hang_id.min'      => 'Vui lòng nhập tên khách hàng lớn hơn 1 ký tự!',
            'khach_hang_id.max'      => 'Vui lòng nhập tên khách hàng ít hơn 20 ký tự!',
            'ngay_ban.required'      => 'Ngày bán không được bỏ trống!',
            'ngay_ban.min'           => 'Vui lòng nhập ngày bán lớn hơn 1 ký tự!',
            'ngay_ban.max'           => 'Vui lòng nhập ngày bán ít hơn 20 ký tự!',
        ];
    }
}
