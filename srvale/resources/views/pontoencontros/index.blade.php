@extends('layouts.principal')

@section('titulo', 'Painel de Controle de Pontos de Encontros')

@section('conteudo')
    <h1>Painel de Controle de Pontos de Encontros</h1>
        <input type="hidden" name="token" value="{{ csrf_token() }}">
            <section>
                <div>
                    <a href="{{route('pontoencontros.create')}}"><div id="cadastrar">Cadastrar Ponto de encontro</div></a>
                </div>
                <table>
                    <tr>
                        <td>ID</td>
                        <td>Nome</td>
                        <td>Instrução</td>
                        <td>Editar</td>
                        <td>Excluir</td>
                    </tr>

                        @forelse ($pontoencontros as $item)
                            <tr>
                                <td>{{ $item -> id }}</td>
                                <td>{{ $item -> nome }}</td>
                                <td>{{ $item -> instrucao }}</td>
                                <td class='editar'> <a href ="{{route('pontoencontros.edit', ['id' =>$item-> id])}}">Editar</a></td>
                                <td class='excluir'>
                                    <form method="post" action="{{route('pontoencontros.destroy', ['id' =>$item-> id])}}">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input class= "botao_excluir" type="submit" name="excluir" value="Excluir">
                                    </form>
                                </td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="2">Nenhum ponto de encontro encontrado.</td>
                            </tr>
                        @endforelse
                </table>
            </section>

@endsection


