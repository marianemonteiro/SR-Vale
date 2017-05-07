@extends('layouts.principal')

@section('titulo', 'Editar Usuário')

@section('conteudo')

    <h1> Editar Usuário </h1>

        <section>
            <div class="formulario">
                <form method="post" action="{{ route('usuarios.update', ['id' => $id]) }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">
                    <fieldset>
                        <legend>Nome: </legend>
                        <input type="text" name="nome" id="nome" value="{{$nome}}" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>E-mail: </legend>
                        <input type="text" name="email" id="email" value="{{$email}}" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>CPF: </legend>
                        <input type="text" name="cpf" id="cpf" value="{{$cpf}}" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Senha: </legend>
                        <input type="password" name="senha" id="senha" value="{{$senha}}" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Bloqueado: </legend>
                        <input type="text" name="bloqueado" id="bloqueado" value="{{$bloqueado}}" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Sala: </legend>
                        <input type="text" name="idsala" id="idsala" value="{{$idsala}}" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Tipo de usuário: </legend>
                        <input type="text" name="tipo_usuario_id" id="tipo_usuario_id" value="{{$tipo_usuario_id}}" required autofocus/>
                    </fieldset>
                    <fieldset class="botao">
                        <input class="button" type="submit" name="salvar" value="Atualizar"/><br /><br />
                    </fieldset>
                </form>
            </div>
        </section>
@endsection