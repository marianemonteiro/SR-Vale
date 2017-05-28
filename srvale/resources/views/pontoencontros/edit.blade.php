@extends('layouts.principal')

@section('titulo', 'Editar Ponto de Encontro')

@section('conteudo')

    <h1> Editar Ponto de Encontro </h1>

        <section>
            <div class="formulario">
                <form method="post" action="{{ route('pontoencontros.update', ['id' => $id]) }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">
                    <fieldset>
                        <legend>Nome: </legend>
                        <input type="text" name="nome" id="nome" value="{{$nome}}" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Instrução: </legend>
                        <textarea rows="10" cols="40" maxlength="500"
                            name="instrucao" id="instrucao"   requiered autofocus>{{$instrucao}}
                        </textarea>
                    </fieldset>
                    <fieldset class="botao">
                        <input class="button" type="submit" name="salvar" value="Atualizar"/><br /><br />
                    </fieldset>
                </form>
            </div>
        </section>
@endsection