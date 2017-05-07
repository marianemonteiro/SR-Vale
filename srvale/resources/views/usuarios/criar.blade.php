@extends('layouts.principal')

@section('titulo', 'Cadastro de Usuários')

@section('conteudo')

    <h1> Cadastro de Usuários </h1>

        <section>
            <div class="formulario">
                <form method="post" action="{{ route('usuarios.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset>
                        <legend>Nome: </legend>
                        <input type="text" name="nome" id="nome" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>E-mail: </legend>
                        <input type="text" name="email" id="email" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>CPF: </legend>
                        <input type="text" name="cpf" id="cpf" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Senha: </legend>
                        <input type="password" name="senha" id="senha" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Bloqueado: </legend>
                        <input type="text" name="bloqueado" id="bloqueado" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Sala: </legend>
                        <input type="text" name="idsala" id="idsala" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Tipo do usuário: </legend>
                        <input type="text" name="tipo_usuario_id" id="tipo_usuario_id" required autofocus/>
                    </fieldset>
                    <fieldset class="botao">
                        <input class="button" type="submit" name="salvar" value="Cadastrar"/><br /><br />
                    </fieldset>
                </form>
            </div>
        </section>
@endsection