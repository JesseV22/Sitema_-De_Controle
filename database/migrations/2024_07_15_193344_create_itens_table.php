<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItensTable extends Migration
{
    public function up()
    {
        Schema::create('itens', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('categoria');
            $table->integer('quantidade');
            $table->decimal('preco', 8, 2);
            $table->string('imagem')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('itens');
    }
}

