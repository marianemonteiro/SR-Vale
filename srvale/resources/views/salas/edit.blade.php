@extends('layouts.principal')

@section('titulo', 'Editar Alerta')

@section('conteudo')

    <h1> Editar Alerta </h1>

        <section>
            <div class="formulario">
                <form method="post" action="{{ route('salasalertas.update', ['id' => $id]) }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">
                    <fieldset>
                        <legend>Nome: </legend>
                        <input type="text" name="nome" id="nome" value="{{$nome}}" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Numero: </legend>
                        <input type="text" name="numero" id="numero" value="{{$numero}}" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Andar: </legend>
                        <input type="text" name="andar" id="andar" value="{{$andar}}" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Prédio: </legend>
                        <input type="text" name="idpredio" id="idpredio" value="{{$idpredio}}" required autofocus/>
                    </fieldset>
                    <fieldset class="botao">
                        <input class="button" type="submit" name="salvar" value="Atualizar"/><br /><br />
                    </fieldset>
                </form>
            </div>
        </section>
@endsection