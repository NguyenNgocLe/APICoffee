<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LichSuDiem extends Migration
{

    public function up()
    {
        Schema::create('lich_su_diem', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('khach_hang_id')->nullable();
            $table->date('ngay')->nullable();
            $table->integer('so_diem')->nullable();
            $table->string('ghi_chu')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lich_su_diem');
    }
}
