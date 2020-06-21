<?php

/**
 * @OA\Post(
 *     tags={"QuanTriVien"},
 *     path="/api/quan-tri-vien/dang-ky",
 *     summary="Đăng ký",
 *     operationId="dangKy",
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="multipart/form-data",
 *             @OA\Schema(
 *                 type="object",
 *                 @OA\Property(
 *                     property="ten_dang_nhap",
 *                     description="Tên đăng nhập quản trị viên",
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
 *     tags={"QuanTriVien"},
 *     path="/api/quan-tri-vien/dang-nhap",
 *     summary="Đăng nhập",
 *     operationId="dangNhap",
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="multipart/form-data",
 *             @OA\Schema(
 *                 type="object",
 *                 @OA\Property(
 *                     property="ten_dang_nhap",
 *                     description="Tên đăng nhập quản trị viên",
 *                     type="string",
 *                     default="a",
 *                 ),
 *                 @OA\Property(
 *                     property="mat_khau",
 *                     description="Mật khẩu",
 *                     type="string",
 *                     format="password",
 *                     default="a",
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
 *     tags={"QuanTriVien"},
 *     path="/api/quan-tri-vien/dang-xuat",
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
 *     tags={"QuanTriVien"},
 *     path="/api/quan-tri-vien/lam-moi-ma-xac-thuc",
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
 *     tags={"QuanTriVien"},
 *     path="/api/quan-tri-vien/cap-nhat/{id}",
 *     summary="Cập nhật thông tin quản trị viên",
 *     operationId="capNhat",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         description="ID của quản trị viên",
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
 *                     description="Họ và tên quản trị viên",
 *                     type="string",
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
 *     tags={"QuanTriVien"},
 *     path="/api/quan-tri-vien/doi-mat-khau",
 *     summary="Đổi mật khẩu quản trị viên",
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
