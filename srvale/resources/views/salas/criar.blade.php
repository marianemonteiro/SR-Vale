@extends('layouts.principal')

@section('titulo', 'Cadastro de Salas')

@section('conteudo')

    <h1> Cadastro de Salas </h1>

        <section>
            <div class="formulario">
                <form method="post" action="{{ route('salas.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset>
                        <legend>Nome: </legend>
                        <input type="text" name="nome" id="nome" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Número: </legend>
                        <input type="text" name="numero" id="numero" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Andar: </legend>
                        <input type="text" name="andar" id="andar" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Prédio: </legend>
                        <input type="text" name="idpredio" id="idpredio" required autofocus/>
                    </fieldset>
                    <fieldset class="botao">
                        <input class="button" type="submit" name="salvar" value="Cadastrar"/><br /><br />
                    </fieldset>
                </form>
            </div>
        </section>
@endsection