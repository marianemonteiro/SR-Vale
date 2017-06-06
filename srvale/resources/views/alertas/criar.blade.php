@extends('layouts.principal')

@section('titulo', 'Cadastro de Alertas')

@section('conteudo')

    <h1> Cadastro de Alertas </h1>

        <section>
            <div class="formulario">
                <form method="post" action="{{ route('alertas.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset>
                        <legend>Cliente: </legend>
                        <input type="number" name="cliente_id" id="cliente_id" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Prioridade: </legend>
                        <select name="prioridade" id="prioridade" required autofocus/>
                        <option value="1" id="prioridade">Baixo</option>
                        <option value="0" id="prioridade">Médio</option>
                        <option value="2" id="prioridade">Alto</option>
                        </select>
                    </fieldset>
                    <fieldset>
                        <legend>Data: </legend>
                        <input type="date" name="data_criacao" id="data_criacao" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Descrição: </legend>
                        <input type="text" name="descricao" id="descricao" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Quantidade de aprovadores: </legend>
                        <select name="qtdaprovadores" id="qtdaprovadores" required autofocus/>
                        <option value="1" id="ativo">Aprovado</option>
                        <option value="0" id="ativo">Desaprovado</option>
                        </select>
                    </fieldset>
                    <fieldset>
                        <legend>Tipo de alerta: </legend>
                        <select name="tipoalerta_id" id="tipoalerta_id" required autofocus/>
                        @if($tipoalertas->count() > 0)
                            @foreach($tipoalertas as $tipoalerta)
                                <option value="{{$tipoalerta->id}}">{{$tipoalerta->descricao}}</option>
                            @endForeach
                        @endif
                        </select>
                    </fieldset>
                    <fieldset>
                        <legend>Status: </legend>
                        <select name="statusalerta_id" id="statusalerta_id" required autofocus/>
                        @if($statusalertas->count() > 0)
                            @foreach($statusalertas as $statusalerta)
                                <option value="{{$statusalerta->id}}">{{$statusalerta->descricao}}</option>
                            @endForeach
                        @endif
                         </select>
                    </fieldset>
                    <fieldset>
                        <legend>Usuário: </legend>
                        <select name="usuario_id" id="usuario_id" required autofocus/>
                        @if($usuarios->count() > 0)
                            @foreach($usuarios as $usuario)
                                <option value="{{$usuario->id}}">{{$usuario->nome}}</option>
                            @endForeach
                        @endif
                        </select>
                    </fieldset>
                    <fieldset class="botao">
                        <input class="button" type="submit" name="salvar" value="Cadastrar"/><br /><br />
                    </fieldset>
                </form>
            </div>
        </section>
@endsection