<?php

namespace App\Http\Requests\LoaiNhanVien;

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
            'ten_loai' => 'bail|required|regex://'
        ];
    }

    public function messages() {
        return [
            'ten_loai.required' => 'Tên loại nhân viên không được trống!'
        ];
    }
}
