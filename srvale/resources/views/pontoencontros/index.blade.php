@extends('layouts.principal')

@section('titulo', 'Painel de Controle de Pontos de Encontros')

@section('conteudo')
    <h1>Painel de Controle de Pontos de Encontros</h1>
        <input type="hidden" name="token" value="{{ csrf_token() }}">
        <section>

            <a href="{{route('pontoencontros.create')}}"><button style ="margin-bottom:10px" type="button" class="btn btn-primary">Cadastrar Ponto de encontro</button></a>
        </section>
                <table class="table table-striped">
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
                                <td><a href="{{route('pontoencontros.edit', ['id' =>$item->id])}}"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                <td class='excluir'>
                                    <form method="post" action="{{route('pontoencontros.destroy', ['id' =>$item-> id])}}">
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
                                <td colspan="2">Nenhum ponto de encontro encontrado.</td>
                            </tr>
                        @endforelse
                </table>
            </section>

@endsection


