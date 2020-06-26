<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\KhachHang;
use App\Helpers\SgRoles;

class KhachHangController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function login(Request $req) {
        $thongTinDangNhap = [
            'ten_dang_nhap' => $req->ten_dang_nhap,
            'password'      => $req->mat_khau
        ];
        if($token = auth('khach_hang')->attempt($thongTinDangNhap)) {
            return response()->json([
                'messages' => 'Đăng nhập thành công!',
                'code'     => 200,
                'token'    => $token
            ]);
        }
        return response()->json([
            'messages' => 'Tên đăng nhập hoặc mật khẩu không chính xác!',
            'code'     => 406,
            'data'     => null
        ]);
    }

    public function logout() {
        auth()->logout();
        return response()->json([
            'messages' => 'Đăng xuất thành công!',
            'code'     => 200
        ]);
    }

    public function forgotPassword() {
        
    }

    public function resetPassword() {
        
    }
}
