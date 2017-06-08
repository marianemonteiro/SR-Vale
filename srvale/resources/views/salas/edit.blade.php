@extends('layouts.principal')

@section('titulo', 'Editar Alerta')

@section('conteudo')

    <h1> Editar Alerta </h1>

        <section>
            <div class="formulario">
                <form method="post" action="{{ route('salas.update', ['id' => $id]) }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" class="form-control" id="nome" value="{{$nome}}" required autofocus/>
                    </div>
                    <div class="form-group">
                        <label for="numero">Numero</label>
                        <input type="text" name="numero" class="form-control" id="numero" value="{{$numero}}" required autofocus/>
                    </div>
                    <div class="form-group">
                        <label for="andar">Andar</label>
                        <input type="text" name="andar" class="form-control" id="andar" value="{{$andar}}" required autofocus/>
                    </div>
                    <div class="form-group">
                        <label for="predio_id">Prédio</label>
                        <select name="predio_id" id="predio_id" class="form-control" required autofocus/>
                        @if($predios->count() > 0)
                            @foreach($predios as $predio)
                                @if($predio_id == $predio->id)
                                    <option value="{{$predio->id}}" selected >{{$predio->nome}}</option>
                                @else
                                    <option value="{{$predio->id}}">{{$predio->nome}}</option>
                                    @endif
                                    @endForeach
                                    @endif
                         </select>
                    </div>
                    <div>
                        <button style ="margin-bottom:10px"  type="submit" class="btn btn-primary" name="salvar" value="Cadastrar"/>Atualizar Cadastro</button>
                    </div>
                </form>
            </div>
        </section>
@endsection