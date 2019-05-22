<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
    protected $table = 'ouvidoria.chamados';
    protected $fillable = [
        'titulo',
        'relato',
        'nome_autor',
        'tipo_id',
        'instituicao_id'
    ];
    public $with = ['midias', 'movimentacao', 'instituicao', 'tipo'];

    public function midias(){
        return $this->hasMany(MidiaChamado::class);
    }
    public function movimentacao(){
        return $this->hasMany(MovimentacaoChamado::class);
    }
    public function instituicao() {
        return $this->belongsTo(Instituicao::class);
    }
    public function tipo() {
        return $this->belongsTo(TipoChamado::class);
    }

}


