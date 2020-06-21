<?php

/**
 * @OA\Post(
 *     tags={"KhachHang"},
 *     path="/api/khach-hang/dang-ky",
 *     summary="Đăng ký",
 *     operationId="dangKy",
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="multipart/form-data",
 *             @OA\Schema(
 *                 type="object",
 *                 @OA\Property(
 *                     property="ten_dang_nhap",
 *                     description="Tên đăng nhập khách hàng",
 *                     type="string",
 *                 ),
 *                 @OA\Property(
 *                     property="mat_khau",
 *                     description="Mật khẩu",
 *                     type="string",
 *                     format="password",
 *                 ),
 *                 required={"ten_dang_nhap","mat_khau"}
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *     ),
 *     @OA\Response(
 *         response=401,
 *         description="Unauthorized",
 *     ),
 *     @OA\Response(
 *         response=500,
 *         description="Error server",
 *     ),
 *     security={
 *         {"bearerAuth": {}}
 *     }
 * )
 */

/**
 * @OA\Post(
 *     tags={"KhachHang"},
 *     path="/api/khach-hang/dang-nhap",
 *     summary="Đăng nhập",
 *     operationId="dangNhap",
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="multipart/form-data",
 *             @OA\Schema(
 *                 type="object",
 *                 @OA\Property(
 *                     property="ten_dang_nhap",
 *                     description="Tên đăng nhập khách hàng",
 *                     type="string",
 *                 ),
 *                 @OA\Property(
 *                     property="mat_khau",
 *                     description="Mật khẩu",
 *                     type="string",
 *                     format="password",
 *                 ),
 *                 required={"ten_dang_nhap","mat_khau"}
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *     ),
 *     @OA\Response(
 *         response=401,
 *         description="Unauthorized",
 *     ),
 *     @OA\Response(
 *         response=500,
 *         description="Error server",
 *     ),
 *     security={
 *         {"bearerAuth": {}}
 *     }
 * )
 */

/**
 * @OA\Post(
 *     tags={"KhachHang"},
 *     path="/api/khach-hang/dang-xuat",
 *     summary="Đăng xuất",
 *     operationId="dangXuat",
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *     ),
 *     @OA\Response(
 *         response=401,
 *         description="Unauthorized",
 *     ),
 *     @OA\Response(
 *         response=500,
 *         description="Error server",
 *     ),
 *     security={
 *         {"bearerAuth": {}}
 *     }
 * )
 */

/**
 * @OA\Post(
 *     tags={"KhachHang"},
 *     path="/api/khach-hang/lam-moi-ma-xac-thuc",
 *     summary="Làm mới mã xác thực",
 *     operationId="lamMoiMaXacThuc",
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *     ),
 *     @OA\Response(
 *         response=401,
 *         description="Unauthorized",
 *     ),
 *     @OA\Response(
 *         response=500,
 *         description="Error server",
 *     ),
 *     security={
 *         {"bearerAuth": {}}
 *     }
 * )
 */

/**
 * @OA\Post(
 *     tags={"KhachHang"},
 *     path="/api/khach-hang/cap-nhat/{id}",
 *     summary="Cập nhật thông tin khách hàng",
 *     operationId="capNhat",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         description="ID của khách hàng",
 *         required=true,
 *         @OA\Schema(
 *             type="integer",
 *             format="int64"
 *         )
 *     ),
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="multipart/form-data",
 *             @OA\Schema(
 *                 type="object",
 *                 @OA\Property(
 *                     property="ho_ten",
 *                     description="Họ và tên khách hàng",
 *                     type="string",
 *                 ),
 *                 @OA\Property(
 *                     property="gioi_tinh",
 *                     description="Giới tính khách hàng",
 *                     type="string",
 *                 ),
 *                 @OA\Property(
 *                     property="ngay_sinh",
 *                     description="Ngày sinh khách hàng (yyyy-mm-dd)",
 *                     type="string",
 *                     format="date",
 *                 ),
 *                 @OA\Property(
 *                     property="email",
 *                     description="Email khách hàng",
 *                     type="string",
 *                     format="email",
 *                 ),
 *                 @OA\Property(
 *                     property="so_dien_thoai",
 *                     description="Số điện thoại khách hàng",
 *                     type="string",
 *                 ),
 *                 @OA\Property(
 *                     property="dia_chi",
 *                     description="Địa chỉ khách hàng",
 *                     type="string",
 *                 ),
 *                 @OA\Property(
 *                     property="anh_dai_dien",
 *                     description="Ảnh đại diện của khách hàng",
 *                     type="file"
 *                 ),
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *     ),
 *     @OA\Response(
 *         response=401,
 *         description="Unauthorized",
 *     ),
 *     @OA\Response(
 *         response=500,
 *         description="Error server",
 *     ),
 *     security={
 *         {"bearerAuth": {}}
 *     }
 * )
 */

/**
 * @OA\Post(
 *     tags={"KhachHang"},
 *     path="/api/khach-hang/doi-mat-khau",
 *     summary="Đổi mật khẩu khách hàng",
 *     operationId="doiMatKhau",
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="multipart/form-data",
 *             @OA\Schema(
 *                 type="object",
 *                 @OA\Property(
 *                     property="mat_khau_cu",
 *                     description="Nhập mật khẩu cũ",
 *                     type="string",
 *                     format="password",
 *               ),
 *              @OA\Property(
 *                     property="mat_khau_moi",
 *                     description="Nhập mật khẩu mới",
 *                     type="string",
 *                     format="password",
 *               ),
 *              @OA\Property(
 *                     property="nhap_lai_mat_khau_moi",
 *                     description="Nhập lại mật khẩu mới",
 *                     type="string",
 *                     format="password",
 *               ),
 *               required={"mat_khau_cu", "mat_khau_moi", "nhap_lai_mat_khau_moi"}
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *     ),
 *     @OA\Response(
 *         response=401,
 *         description="Unauthorized",
 *     ),
 *     @OA\Response(
 *         response=500,
 *         description="Error server",
 *     ),
 *     security={
 *         {"bearerAuth": {}}
 *     }
 * )
 */


