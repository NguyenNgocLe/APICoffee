<?php

/**
 * @OA\Post(
 *     tags={"NhanVien"},
 *     path="/api/nhan-vien/dang-ky/{id}",
 *     summary="Đăng ký",
 *     operationId="dangKy",
 *     @OA\Parameter(
 *         name="kieu_nv",
 *         in="query",
 *         required=true,
 *         description="Tên loại nhân viên",
 *         @OA\Schema(
 *             type="array",
 *             @OA\Items(
 *                 type="string",
 *                 enum={"thuNgan", "kho", "phaChe", "phucVu"},
 *             )
 *         )
 *     ),
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="multipart/form-data",
 *             @OA\Schema(
 *                 type="object",
 *                 @OA\Property(
 *                     property="loai_nhan_vien_id",
 *                     description="Loại nhân viên id",
 *                     type="string",
 *                 ),
 *                 @OA\Property(
 *                     property="ten_dang_nhap",
 *                     description="Tên đăng nhập nhân viên",
 *                     type="string",
 *                 ),
 *                 @OA\Property(
 *                     property="mat_khau",
 *                     description="Mật khẩu",
 *                     type="string",
 *                     format="password",
 *                 ),
 *                 required={"ten_dang_nhap","mat_khau", "loai_nhan_vien_id"}
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
 *     tags={"NhanVien"},
 *     path="/api/nhan-vien/dang-nhap",
 *     summary="Đăng nhập",
 *     operationId="dangNhap",
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="multipart/form-data",
 *             @OA\Schema(
 *                 type="object",
 *                 @OA\Property(
 *                     property="ten_dang_nhap",
 *                     description="Tên đăng nhập nhân viên",
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
