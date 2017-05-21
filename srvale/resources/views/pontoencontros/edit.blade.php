@extends('layouts.principal')

@section('titulo', 'Editar Alerta')

@section('conteudo')

    <h1> Editar Alerta </h1>

        <section>
            <div class="formulario">
                <form method="post" action="{{ route('pontoencontros.update', ['id' => $id]) }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">
                    <fieldset>
                        <legend>Cliente: </legend>
                        <input type="text" name="id_cliente" id="id_cliente" value="{{$id_cliente}}" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Prioridade: </legend>
                        <input type="text" name="prioridade" id="prioridade" value="{{$prioridade}}" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Data: </legend>
                        <input type="date" name="data_criacao" id="data_criacao" value="{{$data_criacao}}" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Quantidade aprovadores: </legend>
                        <input type="number" name="qtd_aprovadores" id="qtd_aprovadores" value="{{$qtd_aprovadores}}" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Tipo: </legend>
                        <input type="text" name="tipo_alerta_id" id="tipo_alerta_id" value="{{$tipo_alerta_id}}" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Status: </legend>
                        <input type="text" name="status_alerta_id" id="status_alerta_id" value="{{$status_alerta_id}}" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Usuário: </legend>
                        <input type="text" name="usuario_idusuario" id="usuario_idusuario" value="{{$tipo_usuario_id}}" required autofocus/>
                    </fieldset>
                    <fieldset class="botao">
                        <input class="button" type="submit" name="salvar" value="Atualizar"/><br /><br />
                    </fieldset>
                </form>
            </div>
        </section>
@endsection