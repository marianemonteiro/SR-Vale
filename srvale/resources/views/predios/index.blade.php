@extends('layouts.principal')

@section('titulo', 'Painel de Controle de Prédios')

@section('conteudo')
    <h1>Painel de Controle de Prédios</h1>
        <input type="hidden" name="token" value="{{ csrf_token() }}">
        <section>
            <a href="{{route('predios.create')}}"><button style ="margin-bottom:10px" type="button" class="btn btn-primary">Cadastrar Prédio</button></a>
        </section>
                <table class="table table-striped">
                    <tr>
                        <td>ID</td>
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
                                <td>{{ $item -> descricao }}</td>
                                <td>{{ $item -> pontoencontro -> nome }}</td>
                                <td><a href="{{route('predios.edit', ['id' =>$item->id])}}"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                <td class='excluir'>
                                    <form method="post" action="{{route('predios.destroy', ['id' =>$item-> id])}}">
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
                                <td colspan="2">Nenhum prédio encontrado.</td>
                            </tr>
                        @endforelse
                </table>
            </section>

@endsection


