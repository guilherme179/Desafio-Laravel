<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;
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
        $clientes = Clientes::get();
        return view('clientes.index', ['clientes' => $clientes]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cadastrar()
    {
        return view('clientes.form');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function salvar(Request $request)
    {
        $cliente = new Clientes;
        $cliente->create($request->all());
        return Redirect::to('clientes');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        $cliente = Clientes::findOrFail($id);
        return view('clientes.form', ['cliente' => $cliente]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function atualizar($id, Request $request)
    {
        $cliente = Clientes::findOrFail($id);
        $cliente->update( $request->all());
        return Redirect::to('clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function apagar($id)
    {
        $cliente = Clientes::findOrFail($id);
        $cliente->delete();
        return Redirect::to('clientes');
    }
}
