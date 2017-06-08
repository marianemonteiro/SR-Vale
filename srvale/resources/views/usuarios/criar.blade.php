@extends('layouts.principal')

@section('titulo', 'Cadastro de Usuários')

@section('conteudo')

    <h1> Cadastro de Usuários </h1>

        <section>
                <form method="post" action="{{ route('usuarios.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" class="form-control" id="nome" required autofocus/>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="text" name="email" class="form-control" id="email" required autofocus/>
                    </div>
                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" name="cpf" class="form-control" id="cpf" required autofocus/>
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" class="form-control" id="senha" required autofocus/>
                    </div>
                    <div class="form-group">
                        <label for="bloqueado">Status</label>
                        <select name="bloqueado" id="bloqueado" class="form-control" required autofocus/>
                        <option value="1" id="ativo">Ativo</option>
                        <option value="0" id="ativo">Inativo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sala">Sala</label>
                        <select name="sala_id" id="sala_id" class="form-control" required autofocus/>
                        @if($salas->count() > 0)
                            @foreach($salas as $sala)
                                <option value="{{$sala->id}}">{{$sala->nome}}</option>
                                @endForeach
                                @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tipousuario">Tipo do usuário</label>
                        <select name="tipousuario_id" id="tipousuario_id" class="form-control" required autofocus/>
                        @if($tipousuarios->count() > 0)
                            @foreach($tipousuarios as $tipousuario)
                                <option value="{{$tipousuario->id}}">{{$tipousuario->descricao}}</option>
                                @endForeach
                                @endif
                        </select>
                     </div>
                    <div>
                        <button style ="margin-bottom:10px" type="submit" class="btn btn-primary" name="salvar" value="Cadastrar"/>Cadastrar</button>
                    </div>
                </form>
        </section>
@endsection