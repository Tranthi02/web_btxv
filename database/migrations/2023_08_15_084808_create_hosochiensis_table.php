<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHosochiensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hosochiensis', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->text('bidanh')->nullable();
            $table->text('namsinh')->nullable();
            $table->text('gioitinh')->nullable();
            $table->text('quequan')->nullable();
            $table->text('thongtinhoatdong')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hosochiensis');
    }
}
