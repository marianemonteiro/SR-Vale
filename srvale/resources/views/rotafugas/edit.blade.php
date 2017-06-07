@extends('layouts.principal')

@section('titulo', 'Editar Rota de Fuga')

@section('conteudo')

    <h1> Editar Rota de Fuga </h1>

        <section>
            <div class="formulario">
                <form method="post" action="{{ route('rotafugas.update', ['id' => $id]) }}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">
                    <fieldset>
                        <legend>Nome: </legend>
                        <input type="text" name="nome" id="nome" value="{{$nome}}" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Instrução: </legend>
                        <textarea rows="10" cols="40" maxlength="500"
                                  name="instrucao" id="instrucao"   requiered autofocus>{{$instrucao}}
                        </textarea>
                    </fieldset>
                    <fieldset>
                        <legend>Imagem: </legend>
                        <img width="250" src="/{{$caminhoimagem}}" name="imagem_old">
                    </fieldset>
                    <fieldset>
                        <legend>Atualizar imagem: </legend>
                        <input type="file" name="imagem" id="imagem"/>
                    </fieldset>
                    <fieldset>
                        <legend>Sala: </legend>
                        <select name="sala_id" id="sala_id"  required autofocus/>
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
                    </fieldset>
                    <fieldset class="botao">
                        <input class="button" type="submit" name="salvar" value="Atualizar"/><br /><br />
                    </fieldset>
                </form>
            </div>
        </section>
@endsection