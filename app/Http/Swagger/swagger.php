<?php

/**
 *  @OA\Info(
 *     description="The Coffee API",
 *     version="3.x",
 *     title="The Coffee API"
 * )
 * @OA\SecurityScheme(
 *     securityScheme="bearerAuth",
 *     in="header",
 *     name="Authorization",
 *     type="http",
 *     scheme="bearer",
 *     bearerFormat="JWT"
 * )
 * @OA\PathItem(
 *   path="/"
 * )
 */
