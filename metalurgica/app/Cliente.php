<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{	
    //use HasFactory;

    protected $fillable = ['nome','email', 'senha', 'endereco','numero', 'cidade', 'estado', 'cpf', 'telefone'];
    protected $guarded = ['id', 'created_at', 'update_at'];
	protected $table = 'clientes';

	public function compras(){
		return $this->hasMany('App\Compra');
	}
}
