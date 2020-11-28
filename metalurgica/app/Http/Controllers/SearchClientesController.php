<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class SearchClientesController extends Controller
{
    public function index(Request $request)
    {
    	$request->validate([
    		'query'=>'required',
    	]);

    	$query = $request->input('query');
    	//dd($query);

    	$clientes = Cliente::where('nome', 'like', "%$query%")->paginate(6);
    	//dd($products);
    	return view ('/search-cliente', compact('clientes'));
    }
}
