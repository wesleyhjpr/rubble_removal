<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    
use App\Cliente;
use Redirect;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::get();
        return view('clientes.lista', ['clientes' => $clientes]);
    }
    public function salvar(Request $request){
        $cliente = new Cliente();
        $cliente = $cliente->create($request->all());
       // \Session::flash('mensagem_sucesso', 'Cliente cadastrado com sucesso');
        
        $request->session()->flash('mensagem_sucesso', 'Contato enviado com sucesso');
        
       return Redirect::to('/#contact');
    }   
    public function deletar($id, Request $request){
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        $request->session()->flash('mensagem_sucesso', 'Contato deletado com sucesso');
        return Redirect::to('clientes');
    }
}
