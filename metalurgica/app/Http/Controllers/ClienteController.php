<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    public function index() {
        $clientes = Cliente::all();
        $total = Cliente::all()->count();
        return view('list-cliente', compact('clientes', 'total'));
    }

    public function create() {
        return view('include-cliente');
    }

    public function store(Request $request) {
        $cliente = new Cliente;
        $cliente->nome = $request->nome;
        $cliente->email = $request->email;
        $cliente->senha = $request->senha;
        $cliente->endereco = $request->endereco;
        $cliente->numero = $request->numero;
        $cliente->cidade = $request->cidade;
        $cliente->estado = $request->estado;
        $cliente->cpf = $request->cpf;
        $cliente->telefone = $request->telefone;
        $cliente->save();
        return redirect()->route('cliente.index')->with('message', 'Cliente cadastrado com sucesso!');
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        $cliente = Cliente::findOrFail($id);
        return view('alter-cliente', compact('cliente'));
    }

    public function update(Request $request, $id) {
        $cliente = Cliente::findOrFail($id); 
        $cliente->nome = $request->nome;
        $cliente->email = $request->email;
        $cliente->senha = $request->senha;
        $cliente->endereco = $request->endereco;
        $cliente->numero = $request->numero;
        $cliente->cidade = $request->cidade;
        $cliente->estado = $request->estado;
        $cliente->cpf = $request->cpf;
        $cliente->telefone = $request->telefone;
        $product->save();
        return redirect()->route('cliente.index')->with('message', 'Cliente alterado com sucesso!');
    }

    public function destroy($id) {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return redirect()->route('cliente.index')->with('message', 'Cliente excluído com sucesso!');
    }
}
