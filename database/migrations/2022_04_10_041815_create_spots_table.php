<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spots', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('official_flg');
            $table->integer('spot_category');
            $table->string('name');
            $table->string('sub_name');
            $table->double('level');
            $table->integer('country_id')->unsigned();
            $table->string('postal_cd');
            $table->integer('prefecture_id')->unsigned();
            $table->string('municipality_block');
            $table->string('telephone_number');
            $table->text('site_url');
            $table->timestamps();

            // 外部キー設定
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->foreign('prefecture_id')->references('id')->on('prefectures')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spots');
    }
}
