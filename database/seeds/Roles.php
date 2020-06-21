<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class Roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        Permission::findOrCreate('khachHang', 'KhachHang');
        Permission::findOrCreate('thamSo', 'QuanTriVien');
        Permission::findOrCreate('khachHang', 'QuanTriVien');
        Permission::findOrCreate('lichSuDiem', 'QuanTriVien');
        Permission::findOrCreate('hoaDonBan', 'QuanTriVien');
        Permission::findOrCreate('chiTietHoaDonBan', 'QuanTriVien');
        Permission::findOrCreate('thucUong', 'QuanTriVien');
        Permission::findOrCreate('quanTriVien', 'QuanTriVien');
        Permission::findOrCreate('nhanVien', 'QuanTriVien');
        Permission::findOrCreate('loaiNhanVien', 'QuanTriVien');
        Permission::findOrCreate('hoaDonNhap', 'QuanTriVien');
        Permission::findOrCreate('chiTietHoaDonNhap', 'QuanTriVien');
        Permission::findOrCreate('nguyenLieu', 'QuanTriVien');
        //
        Permission::findOrCreate('tnLichSuDiem', 'ThuNgan');
        Permission::findOrCreate('tnHoaDonBan', 'ThuNgan');
        Permission::findOrCreate('tnChiTietHoaDonBan', 'ThuNgan');
        Permission::findOrCreate('tnThucUong', 'ThuNgan');
        Permission::findOrCreate('tnLoaiThucUong', 'ThuNgan');
        //
        Permission::findOrCreate('pcHoaDonBan', 'PhaChe');
        Permission::findOrCreate('pcChiTietHoaDonBan', 'PhaChe');
        //
        Permission::findOrCreate('pvHoaDonBan', 'PhucVu');
        Permission::findOrCreate('pvChiTietHoaDonBan', 'PhucVu');
        //
        Permission::findOrCreate('kHoaDonNhap', 'Kho');
        Permission::findOrCreate('kChiTietHoaDonNhap', 'Kho');
        Permission::findOrCreate('kNguyenLieu', 'Kho');

        // phân quyền chức năng của nhân viên
        Role::findOrCreate('khachHang', 'KhachHang');
        Role::findOrCreate('quanTriVien', 'QuanTriVien');
        Role::findOrCreate('thuNgan', 'ThuNgan');
        Role::findOrCreate('kho', 'Kho');
        Role::findOrCreate('phaChe', 'PhaChe');
        Role::findOrCreate('phucVu', 'PhucVu');
        Role::findOrCreate('quanTriVienToanQuyen', 'QuanTriVien');

        $vaiTroQuanTriVien = Role::findByName('quanTriVien', 'QuanTriVien')
                                 ->givePermissionTo([
                                    'thamSo',
                                    'khachHang',
                                    'lichSuDiem',
                                    'hoaDonBan',
                                    'chiTietHoaDonBan',
                                    'thucUong',
                                    'nhanVien',
                                    'loaiNhanVien',
                                    'hoaDonNhap',
                                    'chiTietHoaDonNhap',
                                    'nguyenLieu',
                                ]);

        $vaiTroQuanTriVienToanQuyen = Role::findByName('quanTriVienToanQuyen', 'QuanTriVien')
                                          ->givePermissionTo([
                                            'thamSo',
                                            'khachHang',
                                            'lichSuDiem',
                                            'hoaDonBan',
                                            'chiTietHoaDonBan',
                                            'thucUong',
                                            'nhanVien',
                                            'loaiNhanVien',
                                            'hoaDonNhap',
                                            'chiTietHoaDonNhap',
                                            'nguyenLieu',
                                            'quanTriVien',
                                        ]);

        $vaiTroThuNgan = Role::findByName('thuNgan', 'ThuNgan')
                             ->givePermissionTo([
                                'tnLichSuDiem',
                                'tnHoaDonBan',
                                'tnChiTietHoaDonBan',
                                'tnThucUong',
                                'tnLoaiThucUong',
                            ]);

        $vaiTroPhaChe = Role::findByName('phaChe', 'PhaChe')
                            ->givePermissionTo([
                                'pcHoaDonBan',
                                'pcChiTietHoaDonBan',
                            ]);

        $vaiTroPhucVu = Role::findByName('phucVu', 'PhucVu')
                            ->givePermissionTo([
                                'pvHoaDonBan',
                                'pvChiTietHoaDonBan',
                            ]);

        $vaiTroKho = Role::findByName('kho', 'Kho')
                            ->givePermissionTo([
                                'kHoaDonNhap',
                                'kChiTietHoaDonNhap',
                                'kNguyenLieu'
                            ]);

        $vaiTroKhachHang = Role::findByName('khachHang', 'KhachHang')
                      ->givePermissionTo();
    }
}
