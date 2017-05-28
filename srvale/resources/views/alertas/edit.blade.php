@extends('layouts.principal')

@section('titulo', 'Editar Alerta')

@section('conteudo')

    <h1> Editar Alerta </h1>

        <section>
            <div class="formulario">
                <form method="post" action="{{ route('alertas.update', ['id' => $id]) }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">
                    <fieldset>
                        <legend>Cliente: </legend>
                        <input type="number" name="cliente_id" id="cliente_id" value="{{$cliente_id}}" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Prioridade: </legend>
                        <select name="prioridade" id="prioridade" value="{{$prioridade}}" required autofocus/>
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
                    </fieldset>
                    <fieldset>
                        <legend>Data: </legend>
                        <input type="date" name="data_criacao" id="data_criacao" value="{{$data_criacao}}" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Descrição: </legend>
                        <input type="text" name="descricao" id="descricao" value="{{$descricao}}" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Quantidade aprovadores: </legend>
                        <input type="number" name="qtdaprovadores" id="qtdaprovadores" value="{{$qtdaprovadores}}" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Tipo: </legend>
                        <select name="tipoalerta_id" id="tipoalerta_id" required autofocus/>
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
                    </fieldset>
                    <fieldset>
                        <legend>Status: </legend>
                        <select name="statusalerta_id" id="statusalerta_id" required autofocus/>
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
                    </fieldset>
                    <fieldset>
                        <legend>Usuário: </legend>
                        <select name="usuario_id" id="usuario_id" required autofocus/>
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
                    </fieldset>
                    <fieldset class="botao">
                        <input class="button" type="submit" name="salvar" value="Atualizar"/><br /><br />
                    </fieldset>
                </form>
            </div>
        </section>
@endsection