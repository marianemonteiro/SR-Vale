@extends('layouts.principal')

@section('titulo', 'Cadastro de Ponto de Encontro')

@section('conteudo')

    <h1> Cadastro de Ponto de Encontro </h1>

        <section>
            <div class="formulario">
                <form method="post" action="{{ route('pontoencontros.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset>
                        <legend>Nome: </legend>
                        <input type="text" name="nome" id="nome" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Instrução: </legend>
                        <textarea rows="10" cols="40" maxlength="500" name="instrucao" id="instrucao" required autofocus></textarea>
                    </fieldset>
                    <fieldset class="botao">
                        <input class="button" type="submit" name="salvar" value="Cadastrar"/><br /><br />
                    </fieldset>
                </form>
            </div>
        </section>
@endsection