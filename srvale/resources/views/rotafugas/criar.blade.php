@extends('layouts.principal')

@section('titulo', 'Cadastro de Rota de Fuga')

@section('conteudo')

    <h1> Cadastro de Rota de Fuga </h1>

        <section>
            <div class="formulario">
                <form method="post" action="{{ route('rotafugas.store') }}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset>
                        <legend>Nome: </legend>
                        <input type="text" name="nome" id="nome" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Instrução: </legend>
                        <input type="text" name="instrucao" id="instrucao" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Imagem: </legend>
                        <input type="file" name="imagem" id="imagem" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Sala: </legend>
                        <select name="sala_id" id="sala_id" required autofocus/>
                        @if($salas->count() > 0)
                            @foreach($salas as $sala)
                                <option value="{{$sala->id}}">{{$sala->nome}}</option>
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