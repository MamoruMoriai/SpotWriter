<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParkingLotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parking_lots', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('spot_id')->unsigned();
            $table->integer('season'); //春夏秋冬
            $table->time('start_time'); //開始時刻
            $table->time('end_time'); //終了時刻
            $table->integer('minute'); //利用時間
            $table->integer('price');
            $table->timestamps();

            // 外部キー設定
            $table->foreign('spot_id')->references('id')->on('spots')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parking_lots');
    }
}
