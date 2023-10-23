<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('document_category_id')->nullable();
            $table->foreignId('document_type_id')->nullable();
            $table->string('sokyhieu')->nullable();
            $table->text('trichyeu')->nullable();
            $table->timestamp('ngaybanhanh')->nullable();
            $table->timestamp('ngayhethan')->nullable();
            $table->string('nguoiky')->nullable();
            $table->string('chucvu')->nullable();
            $table->string('coquanbanhanh')->nullable();
            $table->json('dinhkem')->nullable();
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
        Schema::dropIfExists('documents');
    }
}
