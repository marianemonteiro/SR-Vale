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
                        <legend>Status: </legend>
                        <select name="bloqueado" id="bloqueado" value="{{$bloqueado}}" required autofocus/>
                        @if($bloqueado == "Ativo"){
                        <option value="1" id="ativo" selected>Ativo</option>
                        <option value="0" id="ativo">Inativo</option>
                        }
                        @else{
                        <option value="1" id="ativo" >Ativo</option>
                        <option value="0" id="ativo" selected>Inativo</option>
                        }
                        @endif
                        </select>
                    </fieldset>
                    <fieldset>
                        <legend>Sala: </legend>
                        <select name="sala_id" id="sala_id" required autofocus/>
                        @if($salas->count() > 0)
                            @foreach($salas as $sala)
                                @if($sala_id == $sala->id)
                                    <option value="{{$sala->id}}" selected >{{$sala->nome}}</option>
                                @else
                                    <option value="{{$sala->id}}">{{$sala->nome}}</option>
                                @endif
                            @endForeach
                        @endif
                        </select>
                    </fieldset>
                    <fieldset>
                        <legend>Tipo de usuário: </legend>
                        <select name="tipousuario_id" id="tipousuario_id" required autofocus/>
                        @if($tipousuarios->count() > 0)
                            @foreach($tipousuarios as $tipousuario)
                                @if($tipousuario_id == $tipousuario->id)
                                    <option value="{{$tipousuario->id}}" selected >{{$tipousuario->descricao}}</option>
                                @else
                                    <option value="{{$tipousuario->id}}">{{$tipousuario->descricao}}</option>
                                    @endif
                                    @endForeach
                                    @endif
                                    </select>
                    </fieldset>
                    <fieldset class="botao">
                        <input class="button" type="submit" name="salvar" value="Atualizar"/><br /><br />
                    </fieldset>
                </form>
            </div>
        </section>
@endsection