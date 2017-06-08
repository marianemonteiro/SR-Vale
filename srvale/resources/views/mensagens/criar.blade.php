@extends('layouts.principal')

@section('titulo', 'Responder Alerta')

@section('conteudo')

    <h1> Responder Alerta </h1>

        <section>
                <form method="post" action="{{ route('mensagens.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="data">Data</label>
                        <input type="date" name="data" id="data" class="form-control" required autofocus/>
                    </div>
                    <div class="form-group">
                        <label for="tipomensagen_id">Tipo de mensagem</label>
                        <select name="tipomensagen_id" id="tipomensagen_id" class="form-control" required autofocus/>
                        @if($tipomensagens->count() > 0)
                            @foreach($tipomensagens as $tipomensagen)
                                <option value="{{$tipomensagen->id}}">{{$tipomensagen->descricao}}</option>
                            @endForeach
                        @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tipoalerta_id">Tipo de alerta</label>
                        <select name="tipoalerta_id" id="tipoalerta_id" class="form-control" required autofocus/>
                        @if($tipoalertas->count() > 0)
                            @foreach($tipoalertas as $tipoalerta)
                                <option value="{{$tipoalerta->id}}">{{$tipoalerta->descricao}}</option>
                            @endForeach
                        @endif
                         </select>
                    </div>
                    <div class="form-group">
                        <label for="usuario_id">Usuário</label>
                        <select name="usuario_id" id="usuario_id" class="form-control" required autofocus/>
                        @if($usuarios->count() > 0)
                            @foreach($usuarios as $usuario)
                                <option value="{{$usuario->id}}">{{$usuario->nome}}</option>
                            @endForeach
                        @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="conteudo">Mensagem</label>
                        <textarea rows="10" cols="40" maxlength="500" name="conteudo" class="form-control" id="conteudo" required autofocus></textarea>
                    </div>
                    <input type="hidden" name="alerta_id" value="{{$alerta_id}}">
                    <div>
                        <button style ="margin-bottom:10px" type="submit" class="btn btn-primary" name="salvar" value="Cadastrar"/>Cadastrar</button>
                    </div>
                </form>
        </section>
@endsection