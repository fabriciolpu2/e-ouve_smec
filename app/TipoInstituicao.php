<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class TipoInstituicao extends Model
{
    protected $table = 'ouvidoria.tipos_insitituicao';
    protected $fillable = 
    [
        'descricao'
    ];
    public function instituicoes(){
        return $this->hasMany(Insitituicao::class);
    }

}
