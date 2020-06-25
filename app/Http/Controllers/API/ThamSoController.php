<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ThamSo;
use App\Helpers\FitRoles;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class ThamSoController extends Controller
{
    public function index()
    {   
        $client = JWTAuth::toUser();
        var_dump($client->loai_nhan_vien_id);
        exit;

        if(FitRoles::isRole(auth()->user(), 'Nhân viên thu ngân')) {
            $danhSachThamSo = ThamSo::get();
            if (count($danhSachThamSo) > 0) {
                return response()->json([
                    'messages' => 'Lấy danh sách tham số thành công!',
                    'code'     => 200,
                    'data'     => $danhSachThamSo
                ]);
            }
            return response()->json([
                'messages' => 'Lấy danh sách tham số thất bại, danh sách tham số rỗng!',
                'code'     => 400,
                'data'     => null
            ]);
        }
        
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
}
