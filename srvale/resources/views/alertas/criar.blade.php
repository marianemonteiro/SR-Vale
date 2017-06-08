@extends('layouts.principal')

@section('titulo', 'Cadastro de Alertas')

@section('conteudo')

    <h1> Cadastro de Alertas </h1>

        <section>
                <form method="post" action="{{ route('alertas.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="cliente_id">Cliente</label>
                        <input type="number" name="cliente_id" id="cliente_id" class="form-control" required autofocus/>
                    </div>
                    <div class="form-group">
                        <label for="prioridade">Prioridade</label>
                        <select name="prioridade" id="prioridade" class="form-control" required autofocus/>
                        <option value="0" id="prioridade">Baixo</option>
                        <option value="1" id="prioridade">Médio</option>
                        <option value="2" id="prioridade">Alto</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="data_criacao">Data</label>
                        <input type="date" name="data_criacao" id="data_criacao" class="form-control" required autofocus/>
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <input type="text" name="descricao" id="descricao" class="form-control" required autofocus/>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="qtdaprovadores">Quantidade de aprovadores</label>
                        <select name="qtdaprovadores" id="qtdaprovadores" class="form-control" required autofocus/>
                            <option value="1" id="qtdaprovadores">Primeira aprovação</option>
                            <option value="2" id="qtdaprovadores">Segunda aprovação</option>
                            <option value="3" id="qtdaprovadores">Terceira aprovação</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tipoalerta_id">Tipo de alerta</label>
                        <select name="tipoalerta_id" id="tipoalerta_id" class="form-control" required autofocus/>
                        @if($tipoalertas->count() > 0)
                            @foreach($tipoalertas as $tipoalerta)
                                <option value="{{$tipoalerta->id}}">{{$tipoalerta->descricao}}</option>
                            @endForeach
                        @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="statusalerta_id">Status</label>
                        <select name="statusalerta_id" id="statusalerta_id" class="form-control" required autofocus/>
                        @if($statusalertas->count() > 0)
                            @foreach($statusalertas as $statusalerta)
                                <option value="{{$statusalerta->id}}">{{$statusalerta->descricao}}</option>
                            @endForeach
                        @endif
                         </select>
                    </div>
                    <div class="form-group">
                        <label for="usuario_id">Usúario</label>
                        <select name="usuario_id" id="usuario_id" class="form-control" required autofocus/>
                        @if($usuarios->count() > 0)
                            @foreach($usuarios as $usuario)
                                <option value="{{$usuario->id}}">{{$usuario->nome}}</option>
                            @endForeach
                        @endif
                        </select>
                    </div>
                    <div>
                        <button style ="margin-bottom:10px" type="submit" class="btn btn-primary" name="salvar" value="Cadastrar"/>Cadastrar</button>
                    </div>
                </form>
        </section>
@endsection