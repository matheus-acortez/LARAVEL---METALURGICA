<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    //use HasFactory;

    protected $fillable = ['codigo', 'cdcliente', 'cdproduto', 'qtdproduto', 'vltotal', 'enderecoentrega', 'data', 'status', 'cliente_id', 'created_at', 'update_at',];

    public function cliente(){
    	return $this->belongsTo('App\Cliente');
    }
    

}
