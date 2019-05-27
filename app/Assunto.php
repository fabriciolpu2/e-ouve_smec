<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assunto extends Model
{
    protected $table = 'ouvidoria.tipos_assunto';
    protected $fillable = 
    [
        'descricao',       
    ];
    public function chamados(){
        return $this->hasMany(Chamados::class);
    }
}
