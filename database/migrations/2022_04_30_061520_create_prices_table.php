<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('spot_id')->unsigned();
            $table->time('start_time'); //開始時刻
            $table->time('end_time'); //終了時刻
            $table->integer('minute'); //利用時間（分）
            $table->integer('role'); //会員or非会員
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
        Schema::dropIfExists('prices');
    }
}
