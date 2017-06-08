@extends('layouts.principal')

@section('titulo', 'Painel de Controle de Usuários')

@section('conteudo')
    <h1>Painel de Controle de Usúarios</h1>
        <input type="hidden" name="token" value="{{ csrf_token() }}">
        <section>

            <a href="{{route('usuarios.create')}}"><button style ="margin-bottom:10px" type="button" class="btn btn-primary">Cadastrar Usuários</button></a>
        </section>
                <table class="table table-striped">
                    <tr>
                        <td>ID</td>
                        <td>Nome</td>
                        <td>E-mail</td>
                        <td>CPF</td>
                        <td>Senha</td>
                        <td>Bloqueado</td>
                        <td>Sala</td>
                        <td>Tipo Usuário</td>
                        <td>Editar</td>
                        <td>Excluir</td>
                    </tr>

                        @forelse ($usuarios as $item)
                            <tr>
                                <td>{{ $item -> id }}</td>
                                <td>{{ $item -> nome }}</td>
                                <td>{{ $item -> email }}</td>
                                <td>{{ $item -> cpf }}</td>
                                <td>{{ $item -> senha }}</td>
                                <td>{{ $item -> bloqueado }}</td>
                                <td>{{ $item -> sala -> nome }}</td>
                                <td>{{ $item -> tipousuario ->descricao }}</td>
                                <td><a href="{{route('usuarios.edit', ['id' =>$item->id])}}"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                <td class='excluir'>
                                    <form method="post" action="{{route('usuarios.destroy', ['id' =>$item-> id])}}">
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
                                <td colspan="2">Nenhum usuário encontrado.</td>
                            </tr>
                        @endforelse
                </table>
            </section>

@endsection


