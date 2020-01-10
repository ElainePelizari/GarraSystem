<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transportadoras extends Model
{
    protected $fillable = ['enderecos_id', 'razaoSocial', 'cnpj', 'inscEstadual', 'email', 'fone'];
    protected $table = "transportadoras";

    public function enderecos(){
        return $this->belongsTo('App\Enderecos');
    }
}
