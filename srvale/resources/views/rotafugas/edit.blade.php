@extends('layouts.principal')

@section('titulo', 'Editar Rota de Fuga')

@section('conteudo')

    <h1> Editar Rota de Fuga </h1>

        <section>
            <div class="formulario">
                <form method="post" action="{{ route('rotafugas.update', ['id' => $id]) }}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label for="imagem" ></label>
                        <p align="center"><img width="250" src="/{{$caminhoimagem}}" name="imagem_old"></p>
                    </div>
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" class="form-control" id="nome" value="{{$nome}}" required autofocus/>
                    </div>
                    <div class="form-group">
                        <label for="instrucao">Instrução</label>
                        <textarea rows="10" cols="40" maxlength="500"
                                  name="instrucao" id="instrucao"  class="form-control" requiered autofocus>{{$instrucao}}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="sala_id">Sala</label>
                        <select name="sala_id" id="sala_id"  class="form-control" required autofocus/>
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
                        <label for="imagem">Atualizar imagem</label>
                        <input type="file" name="imagem" id="imagem" class="form-control"/>
                    </div>
                    <div>
                        <button style ="margin-bottom:10px" type="submit" class="btn btn-primary" name="salvar" value="Cadastrar"/>Atualizar</button>
                    </div>
                </form>
            </div>
        </section>
@endsection