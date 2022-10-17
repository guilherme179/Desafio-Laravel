@extends('layouts.site')
@section('content')

<main>
<div class="container title">
    <h1>Formulário de cliente</h1>
</div>
    <div class="container linha-horizontal"></div>
    <div class="container">
        
        @if( Request::is('*/cadastrar'))

        <form method="POST" id="form-cad-cliente" action="{{ url('clientes/salvar') }}">
            @csrf
            <div class="row mb-3">
                <label for="nome" class="col-form-label">Cliente</label>
                <div class="col">
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome do cliente..">
                </div>
            </div>

            <div class="row mb-3">
                <label for="contato" class="col-form-label">Contato</label>
                <div class="col">
                    <input type="text" name="contato" class="form-control" id="contato" placeholder="Contato do cliente..">
                </div>
            </div>

            <div class="modal-footer">
                <input type="submit" class="btn btn-success btn-sm" value="Cadastrar">
            </div>
        </form>

        @else
        
        <form method="POST" id="form-cad-cliente" action="{{ url('clientes/atualizar')}}/{{$cliente->id}}">
            @csrf
            <div class="row mb-3">
                <label for="nome" class="col-form-label">Cliente</label>
                <div class="col">
                    <input type="text" name="nome" class="form-control" id="nome" value="{{$cliente->nome}}">
                </div>
            </div>

            <div class="row mb-3">
                <label for="contato" class="col-form-label">Contato</label>
                <div class="col">
                    <input type="text" name="contato" class="form-control" id="contato" value="{{$cliente->contato}}">
                </div>
            </div>

            <div class="modal-footer">
                <input type="submit" class="btn btn-success btn-sm" value="Salvar">
            </div>
        </form>

        @endif
    </div>
</div>
</main>
@endsection