<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    protected $fillable = ['enderecos_id', 'razaoSocial', 'cnpj', 'inscEstadual', 'email', 'fone'];
    
    public function enderecos(){
        return $this->belongsTo('App\Enderecos');
    }
}
