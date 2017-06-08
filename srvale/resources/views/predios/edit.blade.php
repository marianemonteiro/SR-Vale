@extends('layouts.principal')

@section('titulo', 'Editar Prédio')

@section('conteudo')

    <h1> Editar Prédio </h1>

        <section>
                <form method="post" action="{{ route('predios.update', ['id' => $id]) }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" value="{{$nome}}" class="form-control" required autofocus/>
                    </div>
                    <div class="form-group">
                        <label for="qtdandar">Quantidade por andar</label>
                        <input type="number" name="qtdandar" id="qtdandar" value="{{$qtdandar}}" class="form-control" required autofocus/>
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <input type="text" name="descricao" id="descricao" value="{{$descricao}}" class="form-control" required autofocus/>
                    </div>
                    <div class="form-group">
                        <label for="pontoencontro">Ponto de encontro</label>
                        <select name="pontoencontro_id" id="pontoencontro_id" class="form-control" required autofocus/>
                        @if($pontoencontros->count() > 0)
                            @foreach($pontoencontros as $pontoencontro)
                                @if($pontoencontro_id == $pontoencontro->id)
                                    <option value="{{$pontoencontro->id}}" selected >{{$pontoencontro->nome}}</option>
                                @else
                                    <option value="{{$pontoencontro->id}}">{{$pontoencontro->nome}}</option>
                                    @endif
                                    @endForeach
                                    @endif
                        </select>
                    </div>
                    <div>
                        <button style ="margin-bottom:10px" type="submit" class="btn btn-primary" name="salvar" value="Atualizar"/>Atualizar</button>
                    </div>
                </form>
        </section>
@endsection