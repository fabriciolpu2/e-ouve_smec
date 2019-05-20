<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MidiaChamado extends Model
{
    protected $table = 'ouvidoria.midias';
    protected $fillable = 
    [
        'descricao',
        'url',
        'arquivo'
    ];
    public function chamado(){
        return $this->belongsTo(Chamado::class);
    }
}
