@extends('layouts.principal')

@section('titulo', 'Cadastro de Rota de Fuga')

@section('conteudo')

    <h1> Cadastro de Rota de Fuga </h1>

        <section>
            <div class="formulario">
                <form method="post" action="{{ route('rotafugas.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset>
                        <legend>Nome: </legend>
                        <input type="text" name="nome" id="nome" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Instrução: </legend>
                        <input type="text" name="instrucao" id="instrucao" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Imagem: </legend>
                        <input type="image" name="imagem" id="imagem" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Sala: </legend>
                        <input type="text" name="sala_id" id="descricao" required autofocus/>
                    </fieldset>
                    <fieldset class="botao">
                        <input class="button" type="submit" name="salvar" value="Cadastrar"/><br /><br />
                    </fieldset>
                </form>
            </div>
        </section>
@endsection