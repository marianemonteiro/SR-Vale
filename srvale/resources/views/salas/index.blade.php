@extends('layouts.principal')

@section('titulo', 'Painel de Controle de Salas')

@section('conteudo')
    <h1>Painel de Controle de Salas</h1>
        <input type="hidden" name="token" value="{{ csrf_token() }}">
            <section>
                <div>
                    <a href="{{route('salas.create')}}"><div id="cadastrar">Cadastrar Sala</div></a>
                </div>
                <table>
                    <tr>
                        <td>ID</td>
                        <td>Nome</td>
                        <td>Numero</td>
                        <td>Andar</td>
                        <td>Prédio</td>
                        <td>Detalhes</td>
                        <td>Editar</td>
                        <td>Excluir</td>
                    </tr>

                        @forelse ($salas as $item)
                            <tr>
                                <td>{{ $item -> id }}</td>
                                <td>{{ $item -> nome }}</td>
                                <td>{{ $item -> numero }}</td>
                                <td>{{ $item -> andar }}</td>
                                <td>{{ $item -> predio -> nome }}</td>
                                <td class='excluir'><a href="{{route('salas.show', ['id' =>$item->id])}}">Visualizar</a></td>
                                <td class='editar'> <a href ="{{route('salas.edit', ['id' =>$item-> id])}}">Editar</a></td>
                                <td class='excluir'>
                                    <form method="post" action="{{route('salas.destroy', ['id' =>$item-> id])}}">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input class= "botao_excluir" type="submit" name="excluir" value="Excluir">
                                    </form>
                                </td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="2">Nenhuma sala encontrado.</td>
                            </tr>
                        @endforelse
                </table>
            </section>

@endsection


