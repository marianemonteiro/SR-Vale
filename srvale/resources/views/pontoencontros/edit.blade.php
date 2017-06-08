@extends('layouts.principal')

@section('titulo', 'Editar Ponto de Encontro')

@section('conteudo')

    <h1> Editar Ponto de Encontro </h1>

        <section>
                <form method="post" action="{{ route('pontoencontros.update', ['id' => $id]) }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" value="{{$nome}}" class="form-control" required autofocus/>
                    </div>
                    <div class="form-group">
                        <label for="instrucao">Instrução</label>
                        <textarea rows="10" cols="40" maxlength="500"
                            name="instrucao" id="instrucao"   class="form-control" requiered autofocus>{{$instrucao}}
                        </textarea>
                    </div>
                    <div>
                        <button style ="margin-bottom:10px" type="submit" class="btn btn-primary" name="salvar" value="Atualizar"/>Atualizar</button>
                    </div>
                </form>
        </section>
@endsection