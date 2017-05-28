@extends('layouts.principal')

@section('titulo', 'Painel de Controle de Rota de Fuga')

@section('conteudo')
    <h1>Painel de Controle de Rota de Fuga</h1>
        <input type="hidden" name="token" value="{{ csrf_token() }}">
            <section>
                <div>
                    <a href="{{route('rotafugas.create')}}"><div id="cadastrar">Cadastrar Rota de Fuga</div></a>
                </div>
                <table>
                    <tr>
                        <td>ID</td>
                        <td>Nome</td>
                        <td>Instrução</td>
                        <td>Imagem</td>
                        <td>Visualizar</td>
                        <td>Editar</td>
                        <td>Excluir</td>
                    </tr>

                        @forelse ($rotafugas as $item)
                            <tr>
                                <td>{{ $item -> id }}</td>
                                <td>{{ $item -> nome }}</td>
                                <td>{{ $item -> instrucao }}</td>
                                <td>{{ $item -> imagem }}</td>
                                <td class='excluir'><a href="{{route('rotafugas.show', ['id' =>$item->id])}}">Visualizar</a></td>
                                <td class='editar'> <a href ="{{route('rotafugas.edit', ['id' =>$item-> id])}}">Editar</a></td>
                                <td class='excluir'>
                                    <form method="post" action="{{route('rotafugas.destroy', ['id' =>$item-> id])}}">
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


