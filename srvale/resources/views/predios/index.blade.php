@extends('layouts.principal')

@section('titulo', 'Painel de Controle de Prédios')

@section('conteudo')
    <h1>Painel de Controle de Prédios</h1>
        <input type="hidden" name="token" value="{{ csrf_token() }}">
            <section>
                <div>
                    <a href="{{route('predios.create')}}"><div id="cadastrar">Cadastrar Prédio</div></a>
                </div>
                <table>
                    <tr>
                        <td>Nome</td>
                        <td>Quantidade por andar</td>
                        <td>Descrição</td>
                        <td>Ponto de encontro</td>
                        <td>Editar</td>
                        <td>Excluir</td>
                    </tr>

                        @forelse ($predios as $item)
                            <tr>
                                <td>{{ $item -> id }}</td>
                                <td>{{ $item -> nome }}</td>
                                <td>{{ $item -> qtdandar }}</td>
                                <td>{{ $item -> idpontoencontro }}</td>
                                <td class='editar'> <a href ="{{route('predios.edit', ['id' =>$item-> id])}}">Editar</a></td>
                                <td class='excluir'>
                                    <form method="post" action="{{route('predios.destroy', ['id' =>$item-> id])}}">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input class= "botao_excluir" type="submit" name="excluir" value="Excluir">
                                    </form>
                                </td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="2">Nenhum prédio encontrado.</td>
                            </tr>
                        @endforelse
                </table>
            </section>

@endsection


