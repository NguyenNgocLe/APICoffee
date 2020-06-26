<?php

namespace App\Http\Requests\QuanTriVien;

use Illuminate\Foundation\Http\FormRequest;

class DangNhapRequest extends FormRequest
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
            'ten_dang_nhap' => 'bail|required|regex://',
            'mat_khau'      => 'bail|required|regex://'
        ];
    }

    public function messages() {
        return [
            'ten_dang_nhap.required' => 'Tên đăng nhập không được trống!',
            'mat_khau.required'      => 'Mật khẩu không được trống!',
        ];
    }
}
