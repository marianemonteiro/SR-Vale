@extends('layouts.principal')

@section('titulo', 'Editar Usuário')

@section('conteudo')

    <h1> Editar Usuário </h1>

        <section>
                <form method="post" action="{{ route('usuarios.update', ['id' => $id]) }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" class="form-control" id="nome" value="{{$nome}}" required autofocus/>
                    </div>
                    <div class="form-group">
                    <label for="email">E-mail</label>
                        <legend>E-mail: </legend>
                        <input type="text" name="email" class="form-control" id="email" value="{{$email}}" required autofocus/>
                    </div>
                     <div class="form-group">
                         <label for="cpf">CPF</label>
                        <input type="text" name="cpf" class="form-control" id="cpf" value="{{$cpf}}" required autofocus/>
                     </div>
                     <div class="form-group">
                         <label for="senha">Senha</label>
                        <input type="password" name="senha" class="form-control" id="senha" value="{{$senha}}" required autofocus/>
                     </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="bloqueado" id="bloqueado" class="form-control"  value="{{$bloqueado}}" required autofocus/>
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
                    </div>
                    <div class="form-group">
                        <label for="sala">Sala</label>
                        <select name="sala_id" id="sala_id" class="form-control" required autofocus/>
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
                    </div>
                    <div class="form-group">
                        <label for="tipousuario">Tipo de Usuário</label>
                        <select name="tipousuario_id" id="tipousuario_id" class="form-control" required autofocus/>
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
                    </div>
                    <div>
                        <button style ="margin-bottom:10px" type="submit" class="btn btn-primary" name="salvar" value="Cadastrar"/>Atualizar cadastro</button>
                    </div>
                </form>
            </div>
        </section>
@endsection