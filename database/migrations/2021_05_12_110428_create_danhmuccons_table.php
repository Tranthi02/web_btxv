<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDanhmucconsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('danhmuccons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('danhmuc_id')->nullable();
            $table->text('tendm');
            $table->string('slug')->unique();
            $table->foreignId('loaibv_id')->nullable();
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
        Schema::dropIfExists('danhmuccons');
    }
}
