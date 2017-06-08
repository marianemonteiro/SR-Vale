@extends('layouts.principal')

@section('titulo', 'Painel de Controle de Rota de Fuga')

@section('conteudo')
    <h1>Painel de Controle de Rota de Fuga</h1>
        <input type="hidden" name="token" value="{{ csrf_token() }}">
                <section>
                    <a href="{{route('rotafugas.create')}}"><button style ="margin-bottom:10px" type="button" class="btn btn-primary">Cadastrar Rota de Fuga</button></a>
                </section>
                <table class="table table-striped">
                    <tr>
                        <td>ID</td>
                        <td>Nome</td>
                        <td>Instrução</td>
                        <td>Imagem</td>
                        <td>Caminho da imagem</td>
                        <td>Editar</td>
                        <td>Excluir</td>
                    </tr>

                        @forelse ($rotafugas as $item)
                            <tr>
                                <td>{{ $item -> id }}</td>
                                <td>{{ $item -> nome }}</td>
                                <td>{{ $item -> instrucao }}</td>
                                <td><img width="100" src="{{ $item -> caminhoimagem }}"></td>
                                <td>{{ $item -> caminhoimagem }}</td>
                                <td><a href="{{route('rotafugas.edit', ['id' =>$item->id])}}"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                <td class='excluir'>
                                    <form method="post" action="{{route('rotafugas.destroy', ['id' =>$item-> id])}}">
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


