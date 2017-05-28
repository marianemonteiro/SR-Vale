@extends('layouts.principal')

@section('titulo', 'Cadastro de Prédios')

@section('conteudo')

    <h1> Cadastro de Prédio </h1>

        <section>
            <div class="formulario">
                <form method="post" action="{{ route('predios.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset>
                        <legend>Nome: </legend>
                        <input type="text" name="nome" id="nome"  required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Quantidade por andar: </legend>
                        <input type="number" name="qtdandar" id="qtdandar"  required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Descrição: </legend>
                        <input type="text" name="descricao" id="descricao"  required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Ponto de encontro: </legend>
                        <select name="pontoencontro_id" id="pontoencontro_id" required autofocus/>
                        @if($pontoencontros->count() > 0)
                            @foreach($pontoencontros as $pontoencontro)
                                <option value="{{$pontoencontro->id}}">{{$pontoencontro->nome}}</option>
                                @endForeach
                                @endif
                                </select>
                    </fieldset>
                    <fieldset class="botao">
                        <input class="button" type="submit" name="salvar" value="Cadastrar"/><br /><br />
                    </fieldset>
                </form>
            </div>
        </section>
@endsection