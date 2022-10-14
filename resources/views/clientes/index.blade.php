@extends('layouts.site')

@section('content')
<main>
    <div class="container title">
        <h1>Clientes</h1>
    </div>
    <div class="container linha-horizontal"></div>
    <div class="container">
        <div class="table-responsive">
            <div id="header-buttons" class="d-flex justify-content-end align-Clientes-center pt-3 pb-2">
                <button type="button" class="btn btn-success btn-sm"><a href="{{url('clientes/cadastrar')}}" style="text-decoration: none; color: #fff">Cadastrar</a></button>
            </div>
            <table id="listar-clientes" class="table table-striped table-hover table-sm table-bordered align-middle display" style="width:100%;text-align:center">
                <thead style="background: #0d6efd; color: #ffffffd1">
                    <tr>
                        <th style="text-align:center">Código</th>
                        <th style="text-align:center">Cliente</th>
                        <th style="text-align:center">Contato</th>
                        <th style="text-align:center" width="22%">Ações</th>
                    </tr>
                </thead>
                @foreach($clientes as $cliente)
                <tr>
                    <td>{{$cliente->id}}</td>
                    <td>{{$cliente->nome}}</td>
                    <td>{{$cliente->contato}}</td>
                    <td>
                        <button class="btn btn-secondary"><a href="clientes/editar/{{$cliente->id}}" style="text-decoration: none; color: #fff">Editar</a></button>
                        <form action="{{url('/clientes/apagar')}}/{{$cliente->id}}" method="POST">
                            @csrf
                        <button class="btn btn-danger" >Apagar</button>
                        </form> 
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
</div>
</main>
    @endsection