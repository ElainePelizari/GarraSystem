<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estoques extends Model
{
    protected $fillable = ['quantidade'];
    protected $table = "estoques";

    public function produtosGarra(){
        return $this->belongsTo('App\ProdutosGarra');
    }
}
