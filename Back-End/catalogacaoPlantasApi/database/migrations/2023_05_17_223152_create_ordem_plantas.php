<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
     /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('ordem_plantas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->text('descricao')->nullable();
            $table->unsignedBigInteger('ordem_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ordem_plantas');
    }
};
