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
        'atividade',
        'chamado_id',
        'status_id'
    ];
    public $with = ['status'];
    public function chamado(){
        return $this->belongsTo(Chamado::class);
    }
    public function status(){
        return $this->belongsTo(Status::class);
    }
    
}
