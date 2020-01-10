<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clientes extends Model
{
    use SoftDeletes;
    protected $fillable = ['enderecos_id', 'razaoSocial', 'cnpj', 'inscEstadual', 'email', 'fone'];
    
    public function enderecos(){
        return $this->belongsTo('App\Enderecos');
    }

}
