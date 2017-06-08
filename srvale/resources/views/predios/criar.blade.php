@extends('layouts.principal')

@section('titulo', 'Cadastro de Prédios')

@section('conteudo')

    <h1> Cadastro de Prédio </h1>

        <section>
                <form method="post" action="{{ route('predios.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome"  class="form-control" required autofocus/>
                    </div>
                    <div class="form-group">
                        <label for="qtdandar">Quantidade por andar</label>
                        <input type="number" name="qtdandar" id="qtdandar" class="form-control" required autofocus/>
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <input type="text" name="descricao" id="descricao"  class="form-control" required autofocus/>
                    </div>
                    <div class="form-group">
                        <label for="pontoencontro_id">Ponto de encontro</label>
                        <select name="pontoencontro_id" id="pontoencontro_id" class="form-control" required autofocus/>
                        @if($pontoencontros->count() > 0)
                            @foreach($pontoencontros as $pontoencontro)
                                <option value="{{$pontoencontro->id}}">{{$pontoencontro->nome}}</option>
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