<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'ouvidoria.status';
    protected $fillable = 
    [
        'descricao',    
        'style'   
    ];    
}
