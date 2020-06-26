<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NguyenLieu;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Helpers\SgRoles;

class NguyenLieuController extends Controller
{
    public function index()
    {
        if(SgRoles::isRoles(auth()->user(), 'Quản trị viên|Nhân viên kho')) {
            $danhSachNguyenLieu = NguyenLieu::get();
            if (count($danhSachNguyenLieu) > 0) {
                return response()->json([
                    'messages' => 'Lấy danh sách nguyên liệu thành công!',
                    'code'     => 200,
                    'data'     => $danhSachNguyenLieu
                ]);
            } else {
                return response()->json([
                    'messages' => 'Lấy danh sách nguyên liệu thất bại, danh sách nguyên liệu rỗng!',
                    'code'     => 400,
                    'data'     => null
                ]);
            }
        } 
        return response()->json([
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
        if(SgRoles::isRoles(auth()->user(), 'Quản trị viên|Nhân viên kho')) {
            $nguyenLieuTheoId = NguyenLieu::find($id);
            if(isset($nguyenLieuTheoId)) {
                return response()->json([
                    'messages' => 'Lấy nguyên liệu thành công!',
                    'code'     => 200,
                    'data'     => $nguyenLieuTheoId
                ]);
            } else {
                return response()->json([
                    'messages' => 'Không tìm thấy nguyên liệu!',
                    'code'     => 400,
                    'data'     => null
                ]);
            }
        }
        return response()->json([
            'messages' => 'Bạn không có quyền thực hiện chức năng này!',
            'code'     => 403
        ]);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
