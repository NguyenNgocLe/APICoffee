<?php
/**
 * @OA\Post(
 *     tags={"HoaDonBan"},
 *     path="/api/hoa-don-ban/them-moi",
 *     summary="Thêm mới",
 *     operationId="themMoi",
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="multipart/form-data",
 *             @OA\Schema(
 *                 type="object",
 *                 @OA\Property(
 *                     property="nhan_vien_id",
 *                     description="Id nhân viên",
 *                     type="int64",
 *                 ),
 *                 @OA\Property(
 *                     property="khach_hang_id",
 *                     description="id khách hàng",
 *                     type="int64",
 *                 ),
 *                 @OA\Property(
 *                     property="tong_tien",
 *                     description="Tổng tiền",
 *                     type="string",
 *                     format="double",
 *                 ),
 *                 @OA\Property(
 *                     property="diem",
 *                     description="Điểm",
 *                     type="string",
 *                     format="int64",
 *                 ),
 *                 @OA\Property(
 *                     property="ghi_chu",
 *                     description="Ghi chú",
 *                     type="string",
 *                     format="string",
 *                 ),
 *                 required={"nhan_vien_id","khach_hang_id", "tong_tien", "diem"}
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
 *     tags={"HoaDonBan"},
 *     path="/api/hoa-don-ban/cap-nhat",
 *     summary="Cập nhật",
 *     operationId="capNhat",
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="multipart/form-data",
 *             @OA\Schema(
 *                 type="object",
 *                 @OA\Property(
 *                     property="nhan_vien_id",
 *                     description="Id nhân viên",
 *                     type="int64",
 *                 ),
 *                 @OA\Property(
 *                     property="khach_hang_id",
 *                     description="id khách hàng",
 *                     type="int64",
 *                 ),
 *                 @OA\Property(
 *                     property="tong_tien",
 *                     description="Tổng tiền",
 *                     type="string",
 *                     format="double",
 *                 ),
 *                 @OA\Property(
 *                     property="diem",
 *                     description="Điểm",
 *                     type="string",
 *                     format="int64",
 *                 ),
 *                 @OA\Property(
 *                     property="ghi_chu",
 *                     description="Ghi chú",
 *                     type="string",
 *                     format="string",
 *                 ),
 *                 required={"nhan_vien_id","khach_hang_id", "tong_tien", "diem"}
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