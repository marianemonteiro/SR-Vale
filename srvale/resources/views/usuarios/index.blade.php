@extends('layouts.principal')

@section('titulo', 'Painel de Controle de Usuários')

@section('conteudo')
    <h1>Painel de Controle de Usúarios</h1>
        <input type="hidden" name="token" value="{{ csrf_token() }}">
            <section>
                <div>
                    <a href="{{route('usuarios.create')}}"><div id="cadastrar">Cadastrar Usuários</div></a>
                </div>
                <table>
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
                                <td class='editar'> <a href ="{{route('usuarios.edit', ['id' =>$item-> id])}}">Editar</a></td>
                                <td class='excluir'>
                                    <form method="post" action="{{route('usuarios.destroy', ['id' =>$item-> id])}}">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input class= "botao_excluir" type="submit" name="excluir" value="Excluir">
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


