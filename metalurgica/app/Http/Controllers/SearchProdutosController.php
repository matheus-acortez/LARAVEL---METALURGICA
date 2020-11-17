<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;

class SearchProdutosController extends Controller
{
    public function index(Request $request)
    {
    	$request->validate([
    		'query'=>'required',
    	]);

    	$query = $request->input('query');
    	//dd($query);

    	$products = Produto::where('name', 'like', "%$query%")->paginate(6);
    	//dd($products);
    	return view ('/search', compact('products'));
    }
}
