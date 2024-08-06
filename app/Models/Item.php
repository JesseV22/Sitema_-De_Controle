<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $table = 'itens';

    protected $fillable = ['nome', 'categoria', 'quantidade', 'preco', 'imagem'];

    public function movimentacoes()
    {
        return $this->hasMany(Movimentacao::class);
    }
}

