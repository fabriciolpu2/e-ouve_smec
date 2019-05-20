<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{
    protected $table = 'ouvidoria.instituicoes';
    protected $fillable = ['nome'];
    
    public function tipoInstituicao(){
        return $this->belongsTo(TipoInstituicao::class);
    }
    public function chamados() {
        return $this->hasMany(Chamado::class);
    }

}
