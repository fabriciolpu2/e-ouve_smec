<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovimentacaoChamado extends Model
{
    protected $table = 'ouvidoria.movimentacao_chamados';
    protected $fillable = 
    [
        'status',
        'user',
        'atividade'
    ];
    public function chamado(){
        return $this->belongsTo(Chamado::class);
    }
}