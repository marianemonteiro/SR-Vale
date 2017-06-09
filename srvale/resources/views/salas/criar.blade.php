@extends('layouts.principal')

@section('titulo', 'Cadastro de Sala')

@section('conteudo')

    <h1> Cadastro de Sala </h1>

        <section>
                <form method="post" action="{{ route('salas.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" required autofocus/>
                    </div>
                    <div class="form-group">
                        <label for="numero">Número</label>
                        <input type="text" class="form-control" name="numero" id="numero" required autofocus/>
                    </div>
                    <div class="form-group">
                        <label for="andar">Andar</label>
                        <input type="text" class="form-control" name="andar" id="andar" required autofocus/>
                    </div>
                    <div class="form-group">
                        <label for="predio_id">Prédio</label>
                        <select name="predio_id" class="form-control" id="predio_id" required autofocus/>
                        @if($predios->count() > 0)
                            @foreach($predios as $predio)
                                <option value="{{$predio->id}}">{{$predio->nome}}</option>
                                @endForeach
                                @endif
                         </select>
                     </div>
                    <div>
                        <button style ="margin-bottom:10px" type="submit" class="btn btn-primary" name="salvar" value="Cadastrar"/>Cadastrar</button>
                    </div>
                </form>
            </div>
        </section>
@endsection