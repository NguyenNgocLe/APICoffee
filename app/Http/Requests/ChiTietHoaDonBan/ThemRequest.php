<?php

namespace App\Http\Requests\ChiTietHoaDonBan;

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
            'hoa_don_ban_id' => 'bail|required|min:1|max:20|regex://',
            'thuc_uong_id'   => 'bail|required|min:1|max:20|regex://',
            'so_luong'       => 'bail|required|min:1|max:20|regex://',
            'don_gia'        => 'bail|required|min:1|max:20|regex://'
        ];
    }

    public function messages() {
        return [
            'hoa_don_ban_id.required' => 'Tên hóa đơn bán không được trống!',
            'hoa_don_ban_id.min'      => 'Vui lòng nhập tên hóa đơn bán lớn hơn 1 ký tự!',
            'hoa_don_ban_id.max'      => 'Vui lòng nhập tên hóa đơn bán ít hơn 20 ký tự!',
            'thuc_uong_id.required'   => 'Tên thức uống không được trống',
            'thuc_uong_id.min'        => 'Vui lòng nhập tên thức uống lớn hơn 1 ký tự!',
            'thuc_uong_id.max'        => 'Vui lòng nhập tên thức uống ít hơn 20 ký tự!',
            'so_luong.required'       => 'Số lượng không được trống!',
            'so_luong.min'            => 'Vui lòng nhập số lượng lớn hơn 1 ký tự!',
            'so_luong.max'            => 'Vui lòng nhập số lượng ít hơn 20 ký tự!',
            'don_gia.required'        => 'Đơn giá không được trống!',
            'don_gia.min'             => 'Vui lòng nhập đơn giá lớn hơn 1 ký tự!',
            'don_gia.max'             => 'Vui lòng nhập đơn giá ít hơn 20 ký tự!',
        ];
    }
}
