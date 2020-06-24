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
        //
        Permission::findOrCreate('thamSo', 'QuanTriVien');
        Permission::findOrCreate('khachHang', 'QuanTriVien');
        Permission::findOrCreate('lichSuDiem', 'QuanTriVien');
        Permission::findOrCreate('hoaDonBan', 'QuanTriVien');
        Permission::findOrCreate('chiTietHoaDonBan', 'QuanTriVien');
        Permission::findOrCreate('thucUong', 'QuanTriVien');
        Permission::findOrCreate('loaiThucUong', 'QuanTriVien');
        Permission::findOrCreate('quanTriVien', 'QuanTriVien');
        Permission::findOrCreate('nhanVien', 'QuanTriVien');
        Permission::findOrCreate('loaiNhanVien', 'QuanTriVien');
        Permission::findOrCreate('hoaDonNhap', 'QuanTriVien');
        Permission::findOrCreate('chiTietHoaDonNhap', 'QuanTriVien');
        Permission::findOrCreate('nguyenLieu', 'QuanTriVien');
        //
        Permission::findOrCreate('tnLichSuDiem', 'NhanVien');
        Permission::findOrCreate('tnHoaDonBan', 'NhanVien');
        Permission::findOrCreate('tnChiTietHoaDonBan', 'NhanVien');
        Permission::findOrCreate('tnThucUong', 'NhanVien');
        Permission::findOrCreate('tnLoaiThucUong', 'NhanVien');
        //
        Permission::findOrCreate('pcHoaDonBan', 'NhanVien');
        Permission::findOrCreate('pcChiTietHoaDonBan', 'NhanVien');
        //
        Permission::findOrCreate('pvHoaDonBan', 'NhanVien');
        Permission::findOrCreate('pvChiTietHoaDonBan', 'NhanVien');
        //
        Permission::findOrCreate('kHoaDonNhap', 'NhanVien');
        Permission::findOrCreate('kChiTietHoaDonNhap', 'NhanVien');
        Permission::findOrCreate('kNguyenLieu', 'NhanVien');

        // phân quyền chức năng của nhân viên
        Role::findOrCreate('khachHang', 'KhachHang');
        Role::findOrCreate('quanTriVien', 'QuanTriVien');
        Role::findOrCreate('thuNgan', 'NhanVien');
        Role::findOrCreate('kho', 'NhanVien');
        Role::findOrCreate('phaChe', 'NhanVien');
        Role::findOrCreate('phucVu', 'NhanVien');
        Role::findOrCreate('quanTriVienToanQuyen', 'QuanTriVien');

        $vaiTroQuanTriVien = Role::findByName('quanTriVien', 'QuanTriVien')
                                 ->givePermissionTo([
                                    'thamSo',
                                    'khachHang',
                                    'lichSuDiem',
                                    'hoaDonBan',
                                    'chiTietHoaDonBan',
                                    'thucUong',
                                    'loaiThucUong',
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
                                            'loaiThucUong',
                                            'nhanVien',
                                            'loaiNhanVien',
                                            'hoaDonNhap',
                                            'chiTietHoaDonNhap',
                                            'nguyenLieu',
                                            'quanTriVien',
                                        ]);

        $vaiTroThuNgan = Role::findByName('thuNgan', 'NhanVien')
                             ->givePermissionTo([
                                'tnLichSuDiem',
                                'tnHoaDonBan',
                                'tnChiTietHoaDonBan',
                                'tnThucUong',
                                'tnLoaiThucUong',
                            ]);

        $vaiTroPhaChe = Role::findByName('phaChe', 'NhanVien')
                            ->givePermissionTo([
                                'pcHoaDonBan',
                                'pcChiTietHoaDonBan',
                            ]);

        $vaiTroPhucVu = Role::findByName('phucVu', 'NhanVien')
                            ->givePermissionTo([
                                'pvHoaDonBan',
                                'pvChiTietHoaDonBan',
                            ]);

        $vaiTroKho = Role::findByName('kho', 'NhanVien')
                            ->givePermissionTo([
                                'kHoaDonNhap',
                                'kChiTietHoaDonNhap',
                                'kNguyenLieu'
                            ]);

        $vaiTroKhachHang = Role::findByName('khachHang', 'KhachHang')
                      ->givePermissionTo();
    }
}
