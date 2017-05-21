@extends('layouts.principal')

@section('titulo', 'Editar Rota de Fuga')

@section('conteudo')

    <h1> Editar Rota de Fuga </h1>

        <section>
            <div class="formulario">
                <form method="post" action="{{ route('rotafugas.update', ['id' => $id]) }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">
                    <fieldset>
                        <legend>Nome: </legend>
                        <input type="text" name="nome" id="nome" value="{{$nome}}" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Instrução: </legend>
                        <input type="text" name="instrucao" id="instrucao" value="{{$instrucao}}" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Imagem: </legend>
                        <input type="image" name="imagem" id="imagem" value="{{$imagem}}" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Sala: </legend>
                        <input type="number" name="idsala" id="idsala" value="{{$idsala}}" required autofocus/>
                    </fieldset>
                    <fieldset class="botao">
                        <input class="button" type="submit" name="salvar" value="Atualizar"/><br /><br />
                    </fieldset>
                </form>
            </div>
        </section>
@endsection