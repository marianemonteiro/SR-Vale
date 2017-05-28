@extends('layouts.principal')

@section('titulo', 'Detalhes de Motoristas')

@section('conteudo')
    <section>
    <h1>Detalhes de Rota de Fuga - {{$rotafugas -> nome}}</h1>
    <input type="hidden" name="token" value="{{ csrf_token() }}">
    <section>
        <div>

        </div>
        <table>
            <tr>
                <td>Número</td>
                <td>Andar</td>
                <td>Prédio</td>
            </tr>

            @forelse ($rotafugas -> salas as $item)
                <tr>
                    <td>{{ $item -> numero }}</td>
                    <td>{{ $item -> andar }}</td>
                    <td>{{ $item -> predio -> nome }}</td>

                </tr>
            @empty
                <tr>
                    <td colspan="2">Nenhum sala encontrada.</td>
                </tr>
            @endforelse
        </table>
    </section>

@endsection


