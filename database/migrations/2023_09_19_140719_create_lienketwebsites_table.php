<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLienketwebsitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lienketwebsites', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->string('anh')->unique();
            $table->string('link')->unique();
            $table->boolean('hienthi')->default(1);
            $table->integer('thutu')->default(100);
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
        Schema::dropIfExists('lienketwebsites');
    }
}
