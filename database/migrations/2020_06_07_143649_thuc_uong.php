<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ThucUong extends Migration
{

    public function up()
    {
        Schema::create('thuc_uong', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('loai_thuc_uong_id')->nullable();
            $table->string('ten_thuc_uong')->nullable();
            $table->string('hinh_anh')->nullable();
            $table->double('don_gia')->nullable();
            $table->boolean('xoa')->nullable()->default(0);
            $table->string('ghi_chu')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('thuc_uong');
    }
}
