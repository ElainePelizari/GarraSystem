<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutosGarra extends Model
{
    protected $fillable = ['nome', 'tamanho', 'tipo', 'quantidade', 'cor', 'preco'];
    protected $table = "produtos_garra";

    public function estoques(){
        return $this->hasMany('App\Estoques');
    }

}
