<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddThongtinhoatdongToHosochiensis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hosochiensis', function (Blueprint $table) {
            //
            $table->string('thoikihoatdong_id')->nullable();
            $table->string('hotencha')->nullable();
            $table->string('hotenme')->nullable();
            $table->string('donvi_id')->nullable();
                   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hosochiensi', function (Blueprint $table) {
            //
        });
    }
}
