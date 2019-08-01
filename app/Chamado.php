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
        'instituicao_id',
        'token',
        'data_relato',
        'status_id',
        'assunto_id',
        'user_id'
    ];
    protected $date = ['created_at', 'updated_at', 'data_relato'];
    //protected $dateFormat = 'U';
    public $with = ['midias', 'movimentacao', 'instituicao', 'tipo', 'assunto','status'];

    public function midias(){
        return $this->hasMany(MidiaChamado::class);
    }
    public function assunto(){
        return $this->belongsTo(Assunto::class);
    }
    public function status(){
        return $this->belongsTo(Status::class);
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


