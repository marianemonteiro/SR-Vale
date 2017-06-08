@extends('layouts.principal')

@section('titulo', 'Cadastro de Rota de Fuga')

@section('conteudo')

    <h1> Cadastro de Rota de Fuga </h1>

        <section>
                <form method="post" action="{{ route('rotafugas.store') }}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" class="form-control" id="nome" required autofocus/>
                    </div>
                    <div class="form-group">
                        <label for="instrucao">Instrução</label>
                        <textarea rows="10" cols="40" class="form-control" maxlength="500" name="instrucao" id="instrucao" required autofocus></textarea>
                    </div>
                    <div class="form-group">
                        <label for="imagem">Imagem</label>
                        <input type="file" name="imagem" class="form-control" id="imagem" required autofocus/>
                    </div>
                    <div class="form-group">
                        <label for="sala_id">Sala</label>
                        <select name="sala_id" id="sala_id" class="form-control" required autofocus/>
                        @if($salas->count() > 0)
                            @foreach($salas as $sala)
                                <option value="{{$sala->id}}">{{$sala->nome}}</option>
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