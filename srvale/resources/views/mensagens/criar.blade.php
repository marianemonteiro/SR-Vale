@extends('layouts.principal')

@section('titulo', 'Responder Alerta')

@section('conteudo')

    <h1> Responder Alerta </h1>

        <section>
            <div class="formulario">
                <form method="post" action="{{ route('mensagens.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset>
                        <legend>Mensagem: </legend>
                        <textarea rows="10" cols="40" maxlength="500" name="conteudo" id="conteudo" required autofocus></textarea>
                    </fieldset>
                    <fieldset>
                        <legend>Data: </legend>
                        <input type="date" name="data" id="data" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Tipo de mensagens: </legend>
                        <select name="tipomensagen_id" id="tipomensagen_id" required autofocus/>
                        @if($tipomensagens->count() > 0)
                            @foreach($tipomensagens as $tipomensagen)
                                <option value="{{$tipomensagen->id}}">{{$tipomensagen->descricao}}</option>
                            @endForeach
                        @endif
                        </select>
                    </fieldset>
                    <fieldset>
                        <legend>Tipo de Alerta: </legend>
                        <select name="tipoalerta_id" id="tipoalerta_id" required autofocus/>
                        @if($tipoalertas->count() > 0)
                            @foreach($tipoalertas as $tipoalerta)
                                <option value="{{$tipoalerta->id}}">{{$tipoalerta->descricao}}</option>
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
                    <input type="hidden" name="alerta_id" value="{{$alerta_id}}">
                    <fieldset class="botao">
                        <input class="button" type="submit" name="salvar" value="Cadastrar"/><br /><br />
                    </fieldset>
                </form>
            </div>
        </section>
@endsection