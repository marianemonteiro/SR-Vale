@extends('layouts.principal')

@section('titulo', 'Editar Prédio')

@section('conteudo')

    <h1> Editar Prédio </h1>

        <section>
            <div class="formulario">
                <form method="post" action="{{ route('predios.update', ['id' => $id]) }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">
                    <fieldset>
                        <legend>Nome: </legend>
                        <input type="text" name="nome" id="nome" value="{{$nome}}" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Quantidade por andar: </legend>
                        <input type="number" name="qtdandar" id="qtdandar" value="{{$qtdandar}}" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Descrição: </legend>
                        <input type="text" name="descricao" id="descricao" value="{{$descricao}}" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Ponto de encontro: </legend>
                        <select name="pontoencontro_id" id="pontoencontro_id" required autofocus/>
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
                    </fieldset>
                    <fieldset class="botao">
                        <input class="button" type="submit" name="salvar" value="Atualizar"/><br /><br />
                    </fieldset>
                </form>
            </div>
        </section>
@endsection