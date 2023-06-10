<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_facilities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('spot_id')->unsigned();
            $table->integer('facility_id')->unsigned();
            $table->timestamps();

            // 外部キー設定
            $table->foreign('spot_id')->references('id')->on('spots')->onDelete('cascade');
            $table->foreign('facility_id')->references('id')->on('facilities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_facilities');
    }
}
