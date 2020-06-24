<?php

namespace App\Http\Requests\ChiTietHoaDonNhap;

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
            'hoa_don_nhap_id' => 'bail|required|min:1|max:20|regex://',
            'nguyen_lieu_id'  => 'bail|required|min:1|max:20|regex://',
            'so_luong'        => 'bail|required|min:1|max:20|regex://',
            'gia'             => 'bail|required|min:1|max:20|regex://'
        ];
    }

    public function messages() {
        return [
            'hoa_don_nhap_id.required' => 'Tên hóa đơn nhập không được trống!',
            'hoa_don_nhap_id.min'      => 'Vui lòng nhập tên hóa đơn nhập lớn hơn 1 ký tự!',
            'hoa_don_nhap_id.max'      => 'Vui lòng nhập tên hóa đơn nhập ít hơn 20 ký tự!',
            'nguyen_lieu_id.required'  => 'Tên nguyên liệu không được trống!',
            'nguyen_lieu_id.min'       => 'Vui lòng nhập tên nguyên liệu lớn hơn 1 ký tự!',
            'nguyen_lieu_id.max'       => 'Vui lòng nhập tên nguyên liệu ít hơn 20 ký tự!',
            'so_luong.required'        => 'Số lượng không được trống!',
            'so_luong.min'             => 'Vui lòng nhập số lượng lớn hơn 1 ký tự!',
            'so_luong.max'             => 'Vui lòng nhập số lượng ít hơn 20 ký tự!',
            'gia.required'             => 'Giá không được trống!',
            'gia.min'                  => 'Vui lòng nhập giá lớn hơn 1 ký tự!',
            'gia.max'                  => 'Vui lòng nhập giá ít hơn 20 ký tự!',
        ];
    }
}
