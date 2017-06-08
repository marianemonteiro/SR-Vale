@extends('layouts.principal')

@section('titulo', 'Painel de Controle de Alertas')

@section('conteudo')
    <h1>Painel de Controle de Alertas</h1>
        <input type="hidden" name="token" value="{{ csrf_token() }}">
            <section>
                <section>
                    <a href="{{route('alertas.create')}}"><button style ="margin-bottom:10px" type="button" class="btn btn-primary">Cadastrar Alerta</button></a>
                </section>
                <table class="table table-striped">
                    <tr>
                        <td>ID</td>
                        <td>Usuário</td>
                        <td>Prioridade</td>
                        <td>Data de criação</td>
                        <td>Descrição</td>
                        <td>Quantidade de aprovadores</td>
                        <td>Tipo</td>
                        <td>Status</td>
                        <td>Mensagem</td>
                        <td>Editar</td>
                        <td>Excluir</td>
                    </tr>

                        @forelse ($alertas as $item)
                            <tr>
                                <td>{{ $item -> id }}</td>
                                <td>{{ $item -> usuario -> nome }}</td>
                                <td>{{ $item -> prioridade }}</td>
                                <td>{{ $item -> data_criacao }}</td>
                                <td>{{ $item -> descricao }}</td>
                                <td>{{ $item -> qtdaprovadores }}</td>
                                <td>{{ $item -> tipoalerta -> descricao}}</td>
                                <td>{{ $item -> statusalerta -> descricao }}</td>
                                <td><a href="{{route('mensagens.create', ['alerta_id' =>$item->id])}}"><span class="glyphicon glyphicon-comment"></span></a></td>
                                <td><a href="{{route('alertas.edit', ['alerta_id' =>$item->id])}}"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                <td class='excluir'>
                                    <form method="post" action="{{route('alertas.destroy', ['id' =>$item-> id])}}">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </button>
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


