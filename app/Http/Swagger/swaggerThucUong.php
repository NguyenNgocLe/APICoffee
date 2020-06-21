<?php

/**
 * @OA\Get(
 *     tags={"ThucUong"},
 *     path="/api/thuc-uong/danh-sach",
 *     summary="Lấy danh sách thức uống",
 *     operationId="layDanhSach",
 *     @OA\Parameter(
 *         name="gioiHan",
 *         in="query",
 *         description="Số lượng thức uống trên 1 trang",
 *         @OA\Schema(
 *             type="integer",
 *             format="int64",
 *             minimum=1,
 *         )
 *     ),
 *     @OA\Parameter(
 *         name="trang",
 *         in="query",
 *         description="Số trang",
 *         @OA\Schema(
 *             type="integer",
 *             format="int64",
 *             minimum=1
 *         )
 *     ),
 *     @OA\Parameter(
 *         name="filter",
 *         in="query",
 *         description="Lọc thức uống (loai_thuc_uong_id | ten_thuc_uong | don_gia)",
 *         @OA\JsonContent(
 *              type="object",
 *              @OA\Property(
 *                  property="loai_thuc_uong_id",
 *                  type="integer",
 *                  format="int64",
 *              ),
 *              @OA\Property(
 *                  property="ten_thuc_uong",
 *                  type="string",
 *              ),
 *              @OA\Property(
 *                  property="don_gia",
 *                  type="integer",
 *                  format="int64",
 *              ),
 *          ),
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
