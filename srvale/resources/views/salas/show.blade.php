@extends('layouts.principal')

@section('titulo', 'Detalhes de Salas')

@section('conteudo')
    <section>
    <h1>Detalhes de Rota de Fuga - {{$sala -> nome}}</h1>
    <input type="hidden" name="token" value="{{ csrf_token() }}">
    <section>
        <div>

        </div>
        <table class="table table-striped">
            <tr>
                <td>Nome</td>
                <td>Instrução</td>
            </tr>

            @forelse ($sala -> rotafugas as $item)
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


