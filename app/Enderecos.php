<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enderecos extends Model
{
    protected $fillable = ['rua', 'cep', 'bairro', 'cidade', 'uf', 'numero'];
    protected $table = "enderecos";

    // Relacionamento 
    public function clientes(){
        return $this->hasMany('App\Clientes');
    }

    public function fornecedores(){
        return $this->hasMany('App\Fornecedores');
    }

    public function transportadoras(){
        return $this->hasMany('App\Transportadoras');
    }

}
