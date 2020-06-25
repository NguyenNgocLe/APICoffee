<?php

return [

    'defaults' => [
        'guard' => 'nhan_vien'
    ],

    'guards' => [
        'nhan_vien' => [
            'driver' => 'jwt',
            'provider' => 'nhan_vien',
        ],
        'khach_hang' => [
            'driver' => 'jwt',
            'provider' => 'khach_hang',
        ]
    ],
    
    'providers' => [
        'nhan_vien' => [
            'driver' => 'eloquent',
            'model' => App\NhanVien::class,
        ],
        'khach_hang' => [
            'driver' => 'eloquent',
            'model' => App\KhachHang::class,
        ]
    ],
];