<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovimentacoesTable extends Migration
{
    public function up()
    {
        Schema::create('movimentacoes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_id')->constrained('itens')->onDelete('cascade');
            $table->date('data_movimentacao');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('movimentacoes');
    }
}
