<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoidapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoidaps', function (Blueprint $table) {
            $table->id();
            $table->text('Hoten')->nullable();
            $table->text('Diachi')->nullable();
            $table->text('Email')->nullable();
            $table->text('Sdt')->nullable();
            $table->text('Noidungcauhoi')->nullable();
            
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
        Schema::dropIfExists('hoidaps');
    }
}
