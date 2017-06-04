@extends('layouts.principal')

@section('titulo', 'Detalhes de Salas')

@section('conteudo')
    <section>
    <h1>Detalhes de Rota de Fuga - {{$sala -> nome}}</h1>
    <input type="hidden" name="token" value="{{ csrf_token() }}">
    <section>
        <div>

        </div>
        <table>
            <tr>
                <td>Nome</td>
                <td>Instrução</td>
            </tr>

            @forelse ($sala -> rotafuga as $item)
                <tr>
                    <td>{{ $item -> nome }}</td>
                    <td>{{ $item -> instrucao }}</td>

                </tr>
            @empty
                <tr>
                    <td colspan="2">Nenhuma rota de fuga encontrada.</td>
                </tr>
            @endforelse
        </table>
    </section>

@endsection


