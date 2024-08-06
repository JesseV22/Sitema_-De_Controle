<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimentacao extends Model
{
    use HasFactory;

    protected $table = 'movimentacoes';

    protected $fillable = ['item_id', 'data_movimentacao'];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
