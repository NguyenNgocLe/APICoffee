<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ThamSo extends Migration
{

    public function up()
    {
        Schema::create('tham_so', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_tham_so')->nullable();
            $table->double('gia_tri')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tham_so');
    }
}
