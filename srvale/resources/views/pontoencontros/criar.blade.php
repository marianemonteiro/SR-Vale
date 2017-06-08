@extends('layouts.principal')

@section('titulo', 'Cadastro de Ponto de Encontro')

@section('conteudo')

    <h1> Cadastro de Ponto de Encontro </h1>

        <section>
                <form method="post" action="{{ route('pontoencontros.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control" required autofocus/>
                    </div>
                    <div class="form-group">
                        <label for="instrucao">Instrução</label>
                        <textarea rows="10" cols="40" maxlength="500" name="instrucao" id="instrucao" class="form-control" required autofocus></textarea>
                    </div>
                    <div>
                        <button style ="margin-bottom:10px" type="submit" class="btn btn-primary" name="salvar" value="Cadastrar"/>Cadastrar</button>
                    </div>
                </form>
        </section>
@endsection