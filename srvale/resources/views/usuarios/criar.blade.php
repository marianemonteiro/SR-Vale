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
                        <legend>Status: </legend>
                        <select name="bloqueado" id="bloqueado" required autofocus/>
                        <option value="1" id="ativo">Ativo</option>
                        <option value="0" id="ativo">Inativo</option>
                        </select>
                    </fieldset>
                    <fieldset>
                        <legend>Sala: </legend>
                        <select name="sala_id" id="sala_id" required autofocus/>
                        @if($salas->count() > 0)
                            @foreach($salas as $sala)
                                <option value="{{$sala->id}}">{{$sala->nome}}</option>
                                @endForeach
                                @endif
                        </select>
                    </fieldset>
                    <fieldset>
                        <legend>Tipo do Usuário: </legend>
                        <select name="tipousuario_id" id="tipousuario_id" required autofocus/>
                        @if($tipousuarios->count() > 0)
                            @foreach($tipousuarios as $tipousuario)
                                <option value="{{$tipousuario->id}}">{{$tipousuario->descricao}}</option>
                                @endForeach
                                @endif
                        </select>
                    </fieldset>
                    <fieldset class="botao">
                        <input class="button" type="submit" name="salvar" value="Cadastrar"/><br /><br />
                    </fieldset>
                </form>
            </div>
        </section>
@endsection