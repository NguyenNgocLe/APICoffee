<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ThamSo;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Helpers\SgRoles;

class ThamSoController extends Controller
{
    public function index()
    {   
        $client = JWTAuth::toUser();
        if(SgRoles::isRole(auth()->user(), 'Quản trị viên')) {
            $danhSachThamSo = ThamSo::get();
            if (count($danhSachThamSo) > 0) {
                return response()->json([
                    'messages' => 'Lấy danh sách tham số thành công!',
                    'code'     => 200,
                    'data'     => $danhSachThamSo
                ]);
            } else {
                return response()->json([
                    'messages' => 'Lấy danh sách tham số thất bại, danh sách tham số rỗng!',
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
