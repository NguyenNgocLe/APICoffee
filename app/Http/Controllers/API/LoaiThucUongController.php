<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\SgRoles;
use App\LoaiThucUong;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class LoaiThucUongController extends Controller
{
    // hiển thị nhiều thằng trong database
    public function index()
    {
        if(SgRoles::isRoles(auth()->user(), 'Quản trị viên|Nhân viên thu ngân|Nhân viên pha chế|Nhân viên phục vụ|Nhân viên kho')) {
            $danhSachLoaiThucUong = LoaiThucUong::get();
            if(count($danhSachLoaiThucUong) > 0) {
                return response()->json([
                    'messages' => 'Lấy danh sách loại thức uống thành công!',
                    'code'     => 200,
                    'data'     => $danhSachLoaiThucUong
                ]);
            } else {
                return response()->json([
                    'messages' => 'Lấy danh sách loại thức uống thất bại!',
                    'code'     => 401,
                    'data'     => null
                ]);
            }
        }
        return response()->json([
            'messages' => 'Bạn không có quyền thực hiện chức năng này!',
            'code'     => 403
        ]);
    }
    // thêm
    public function store(Request $request)
    {
        //
    }
    // hiển thị theo 1 thằng theo id
    public function show($id)
    {
        //
    }
    // cập nhật 1 thằng theo id
    public function update(Request $request, $id)
    {
        //
    }
    // xóa 1 thằng theo id
    public function destroy($id)
    {
        //
    }
    // xóa luôn trong database method trash
}
