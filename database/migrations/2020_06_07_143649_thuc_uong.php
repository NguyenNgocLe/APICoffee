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
            $table->string('ten')->nullable();
            $table->string('hinh_anh')->nullable();
            $table->unsignedInteger('don_gia')->nullable();
            $table->string('ghi_chu')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('loai_thuc_uong_id')->references('id')->on('loai_thuc_uong');
        });
    }

    public function down()
    {
        Schema::dropIfExists('thuc_uong');
    }
}
