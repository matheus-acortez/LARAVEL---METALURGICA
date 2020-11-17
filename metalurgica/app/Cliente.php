<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{	
    //use HasFactory;

    protected $fillable = ['codigo','nome','email', 'senha', 'endereco','numero', 'cidade', 'estado', 'cpf', 'telefone', 'created_at', 'update_at',];
	protected $table = 'clientes';

	public function compras(){
		return $this->hasMany('App\Compra');
	}
}
