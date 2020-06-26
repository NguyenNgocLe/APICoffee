<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NguyenLieu extends Migration
{

    public function up()
    {
        Schema::create('nguyen_lieu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten')->nullable();
            $table->string('don_vi_tinh')->nullable();
            $table->unsignedInteger('so_luong_ton')->nullable();
            $table->unsignedInteger('don_gia')->nullable();
            $table->string('ghi_chu')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nguyen_lieu');
    }
}
