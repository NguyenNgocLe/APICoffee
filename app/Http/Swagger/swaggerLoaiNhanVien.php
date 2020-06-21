<?php

/**
 * @OA\Post(
 *     tags={"LoaiNhanVien"},
 *     path="/api/loai-nhan-vien/them-moi",
 *     summary="Thêm mới loại nhân viên",
 *     operationId="themMoi",
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="multipart/form-data",
 *             @OA\Schema(
 *                 type="object",
 *                 @OA\Property(
 *                     property="ten_loai",
 *                     description="Tên loại nhân viên",
 *                     type="string",
 *                 ),
 *                 required={"ten_loai"}
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
