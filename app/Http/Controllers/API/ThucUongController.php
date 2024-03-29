<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ThucUong;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Helpers\SgRoles;
class ThucUongController extends Controller
{
    public function index()
    {
        if(SgRoles::isRoles(auth()->user(), 'Quản trị viên|Nhân viên thu ngân|Nhân viên pha chế|Nhân viên phục vụ|Nhân viên kho|khách hàng')) {
            $danhSachThucUong = ThucUong::get();
            if(count($danhSachThucUong) > 0) {
                return response()->json([
                    'messages' => 'Lấy danh sách thức uống thành công!',
                    'code'     => 200,
                    'data'     => $danhSachThucUong
                ]);
            } else {
                return response()->json([
                    'messages' => 'Lấy danh sách thức uống thất bại!',
                    'code'     => 401,
                    'data'     => null
                ]);
            }
        }
        return response([
            'messages' => 'Bạn không có quyền thực hiện chức năng này!',
            'code'     => 403
        ]);
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        if(SgRoles::isRoles(auth()->user(), 'Quản trị viên|Nhân viên thu ngân|Nhân viên pha chế|Nhân viên phục vụ|Nhân viên kho')) {
            $nguyenLieuTheoId = ThucUong::find($id);
            if(isset($nguyenLieuTheoId)) {
                return response()->json([
                    'messages' => 'Lấy nguyên liệu thành công!',
                    'code'     => 200,
                    'data'     => $nguyenLieuTheoId
                ]);
            } else {
                return response()->json([
                    'messages' => 'Lấy nguyên liệu thất bại!',
                    'code'     => 403,
                    'data'     => $nguyenLieuTheoId
                ]);
            }
        } 
        return response()->json([
            'messages' => 'Bạn không thể thực hiện chức năng này!',
            'code'     => 401
        ]);
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        //
    }
}
