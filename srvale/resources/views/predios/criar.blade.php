@extends('layouts.principal')

@section('titulo', 'Cadastro de Alertas')

@section('conteudo')

    <h1> Cadastro de Alertas </h1>

        <section>
            <div class="formulario">
                <form method="post" action="{{ route('alertas.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset>
                        <legend>Nome: </legend>
                        <input type="text" name="nome" id="nome"  required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Quantidade por andar: </legend>
                        <input type="number" name="qtdandar" id="qtdandar"  required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Descrição: </legend>
                        <input type="text" name="descricao" id="descricao"  required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Ponto de encontro: </legend>
                        <input type="text" name="idpontoencontro" id="idpontoencontro" required autofocus/>
                    </fieldset>
                    <fieldset class="botao">
                        <input class="button" type="submit" name="salvar" value="Cadastrar"/><br /><br />
                    </fieldset>
                </form>
            </div>
        </section>
@endsection