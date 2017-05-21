@extends('layouts.principal')

@section('titulo', 'Cadastro de Alertas')

@section('conteudo')

    <h1> Cadastro de Alertas </h1>

        <section>
            <div class="formulario">
                <form method="post" action="{{ route('pontoencontros.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset>
                        <legend>Cliente: </legend>
                        <input type="text" name="id_cliente" id="id_cliente" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Prioridade: </legend>
                        <input type="text" name="prioridade" id="prioridade" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Data: </legend>
                        <input type="date" name="data_criacao" id="data_criacao" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Descrição: </legend>
                        <input type="password" name="descricao" id="descricao" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Quantidade de aprovadores: </legend>
                        <input type="number" name="qtd_aprovadores" id="qtd_aprovadores" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Tipo de alerta: </legend>
                        <input type="text" name="tipo_alerta_id" id="tipo_alerta_id" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Status: </legend>
                        <input type="text" name="status_alerta_id" id="status_alerta_id" required autofocus/>
                    </fieldset>
                    <fieldset>
                        <legend>Usuário: </legend>
                        <input type="text" name="usuario_idusuario" id="usuario_idusuario" required autofocus/>
                    </fieldset>
                    <fieldset class="botao">
                        <input class="button" type="submit" name="salvar" value="Cadastrar"/><br /><br />
                    </fieldset>
                </form>
            </div>
        </section>
@endsection