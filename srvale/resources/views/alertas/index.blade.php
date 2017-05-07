@extends('layouts.principal')

@section('titulo', 'Painel de Controle de Alertas')

@section('conteudo')
    <h1>Painel de Controle de Alertas</h1>
        <input type="hidden" name="token" value="{{ csrf_token() }}">
            <section>
                <div>
                    <a href="{{route('alertas.create')}}"><div id="cadastrar">Cadastrar Alerta</div></a>
                </div>
                <table>
                    <tr>
                        <td>Cliente</td>
                        <td>Prioridade</td>
                        <td>Data</td>
                        <td>Descrição</td>
                        <td>Quantidade de aprovadores</td>
                        <td>Tipo</td>
                        <td>Status</td>
                        <td>Usuário</td>
                        <td>Editar</td>
                        <td>Excluir</td>
                    </tr>

                        @forelse ($alertas as $item)
                            <tr>
                                <td>{{ $item -> id }}</td>
                                <td>{{ $item -> id_cliente }}</td>
                                <td>{{ $item -> prioridade }}</td>
                                <td>{{ $item -> data_criacao }}</td>
                                <td>{{ $item -> descricao }}</td>
                                <td>{{ $item -> tipo_alerta_id }}</td>
                                <td>{{ $item -> status_alerta_id }}</td>
                                <td>{{ $item -> usuario_idusuario }}</td>
                                <td class='editar'> <a href ="{{route('alertas.edit', ['id' =>$item-> id])}}">Editar</a></td>
                                <td class='excluir'>
                                    <form method="post" action="{{route('alertas.destroy', ['id' =>$item-> id])}}">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input class= "botao_excluir" type="submit" name="excluir" value="Excluir">
                                    </form>
                                </td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="2">Nenhum alerta encontrado.</td>
                            </tr>
                        @endforelse
                </table>
            </section>

@endsection


