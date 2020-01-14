<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionarios extends Model
{
    protected $fillable = ['enderecos_id', 'nome', 'dataNasc', 'email', 'fone'];
    
    public function enderecos(){
        return $this->belongsTo('App\Enderecos');
    }
}
