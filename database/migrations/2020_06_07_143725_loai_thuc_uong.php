<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LoaiThucUong extends Migration
{

    public function up()
    {
        Schema::create('loai_thuc_uong', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_loai_thuc_uong')->nullable();
            $table->boolean('xoa')->nullable()->default(0);
            $table->string('ghi_chu')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('loai_thuc_uong');
    }
}
