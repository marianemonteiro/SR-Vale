@extends('layouts.principal')

@section('titulo', 'Painel de Controle de Salas')

@section('conteudo')
    <h1 xmlns="http://www.w3.org/1999/html">Painel de Controle de Salas</h1>
        <input type="hidden" name="token" value="{{ csrf_token() }}">
            <section>

                <a href="{{route('salas.create')}}"><button style ="margin-bottom:10px" type="button" class="btn btn-primary">Cadastrar Sala</button></a>
            </section>
                <table class="table table-striped">
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
                                <td><a href="{{route('salas.show', ['id' =>$item->id])}}"><span class="glyphicon glyphicon-search"></span></a></td>
                                <td><a href="{{route('salas.edit', ['id' =>$item->id])}}"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                <td class='excluir'>
                                    <form method="post" action="{{route('salas.destroy', ['id' =>$item-> id])}}">
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
                                <td colspan="2">Nenhuma sala encontrado.</td>
                            </tr>
                        @endforelse
                </table>
            </section>

@endsection


