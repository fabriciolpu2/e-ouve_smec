<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoChamado extends Model
{
    protected $table = 'ouvidoria.tipos_chamado';
    protected $fillable = 
    [
        'descricao',
        'style'
    ];
    public function chamados(){
        return $this->hasMany(Chamados::class);
    }
}
