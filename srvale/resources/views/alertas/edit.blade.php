@extends('layouts.principal')

@section('titulo', 'Editar Alerta')

@section('conteudo')

    <h1> Editar Alerta </h1>

        <section>
                <form method="post" action="{{ route('alertas.update', ['id' => $id]) }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label for="cliente_id">Cliente</label>
                        <input type="number" name="cliente_id" id="cliente_id" value="{{$cliente_id}}" class="form-control" required autofocus/>
                    </div>
                    <div class="form-group">
                        <label for="prioridade">Prioridade</label>
                        <select name="prioridade" id="prioridade" value="{{$prioridade}}" class="form-control" required autofocus/>
                        @if($prioridade == "Baixo"){
                        <option value="1" id="prioridade" selected>Baixo</option>
                        <option value="0" id="prioridade">Médio</option>
                        <option value="2" id="prioridade">Alto</option>
                        }
                        @elseif($prioridade == "Médio"){
                        <option value="1" id="prioridade">Baixo</option>
                        <option value="0" id="prioridade" selected>Médio</option>
                        <option value="2" id="prioridade">Alto</option>
                        }
                        @else{
                        <option value="1" id="prioridade">Baixo</option>
                        <option value="0" id="prioridade">Médio</option>
                        <option value="2" id="prioridade" selected>Alto</option>
                        }
                        @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="data_criacao">Data</label>
                        <input type="date" name="data_criacao" id="data_criacao" value="{{$data_criacao}}" class="form-control" required autofocus/>
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <input type="text" name="descricao" id="descricao" value="{{$descricao}}" class="form-control" required autofocus/>
                    </div>
                    <div class="form-group">
                        <label for="qtdaprovadores">Quantidade de aprovadores</label>
                            <select name="qtdaprovadores" id="qtdaprovadores" value="{{$qtdaprovadores}}" class="form-control" required autofocus/>
                            @if($qtdaprovadores == 1){
                            <option value="1" id="qtdaprovadores" selected>Primeira aprovação</option>
                            <option value="2" id="qtdaprovadores">Segunda aprovação</option>
                            <option value="3" id="qtdaprovadores">Terceira aprovação</option>
                            }
                            @elseif($qtdaprovadores == 2){
                            <option value="1" id="qtdaprovadores">Primeira aprovação</option>
                            <option value="2" id="qtdaprovadores" selected>Segunda aprovação</option>
                            <option value="3" id="qtdaprovadores">Terceira aprovação</option>
                            }
                            @else{
                            <option value="1" id="qtdaprovadores">Primeira aprovação</option>
                            <option value="2" id="qtdaprovadores">Segunda aprovação</option>
                            <option value="3" id="qtdaprovadores" selected>Terceira aprovação</option>
                            }
                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tipoalerta_id">Tipo de alerta</label>
                        <select name="tipoalerta_id" id="tipoalerta_id" class="form-control" required autofocus/>
                        @if($tipoalertas->count() > 0)
                            @foreach($tipoalertas as $tipoalerta)
                                @if($tipoalerta_id == $tipoalerta->id)
                                    <option value="{{$tipoalerta->id}}" selected >{{$tipoalerta->descricao}}</option>
                                @else
                                    <option value="{{$tipoalerta->id}}">{{$tipoalerta->descricao}}</option>
                                @endif
                            @endForeach
                        @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="statusalerta_id">Status</label>
                        <select name="statusalerta_id" id="statusalerta_id" class="form-control" required autofocus/>
                        @if($statusalertas->count() > 0)
                            @foreach($statusalertas as $statusalerta)
                                @if($statusalerta_id == $statusalerta->id)
                                    <option value="{{$statusalerta->id}}" selected >{{$statusalerta->descricao}}</option>
                                @else
                                    <option value="{{$statusalerta->id}}">{{$statusalerta->descricao}}</option>
                                @endif
                            @endForeach
                        @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="usuario_id">Usúario</label>
                        <select name="usuario_id" id="usuario_id" class="form-control" required autofocus/>
                        @if($usuarios->count() > 0)
                            @foreach($usuarios as $usuario)
                                @if($usuario_id == $usuario->id)
                                    <option value="{{$usuario->id}}" selected >{{$usuario->nome}}</option>
                                @else
                                    <option value="{{$usuario->id}}">{{$usuario->nome}}</option>
                                @endif
                            @endForeach
                        @endif
                        </select>
                    </div>
                    <div>
                        <button style ="margin-bottom:10px" type="submit" class="btn btn-primary" name="salvar" value="Atualizar"/>Atualizar</button>
                    </div>
                </form>
        </section>
@endsection