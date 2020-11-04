<?php

namespace App\Models;
namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{

	protected $fillable = ['name', 'description', 'quantity', 'price', 'imagem'];
	protected $table = 'produtos';
    use HasFactory;
}
