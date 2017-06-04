<?php

namespace App\Http\Controllers;

use App\Rotafuga;
use App\Sala;
use Symfony\Component\HttpFoundation\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class RotafugasController extends Controller
{
    public function index()
    {
        $rotafugas = Rotafuga::all();
        $salas = Sala::all();
        return view('rotafugas.index', ['rotafugas'=>$rotafugas, 'salas'=>$salas]);
    }


    public function create()
    {
        $rotafugas = Rotafuga::all();
        $salas = Sala::all();
        return view('rotafugas.criar', ['rotafugas'=>$rotafugas, 'salas'=>$salas]);
    }

    public function store(Request $request)
    {
        $imagem = $request->file('imagem');

        $pasta = public_path() . '/imagens';

        $nome_imagem = 'rota' . time() . '.' . $imagem->getClientOriginalExtension();

        // Move arquivo para pasta
        $nova_imagem = $imagem->move($pasta, $nome_imagem);

        //Salva o caminho no banco
        $path = storage_path('public/' . $nome_imagem);

        $rotafugas = new Rotafuga();
        $rotafugas -> nome  = Input::get('nome');
        $rotafugas -> instrucao = Input::get('instrucao');
        $rotafugas -> nomeimagem = $nome_imagem;
        $rotafugas -> caminhoimagem = $nova_imagem->getPathname();
        $rotafugas -> save();

        //Tabela intermediária, anexando
        $rotafugas -> salas()->attach(Input::get('sala_id'));

        return redirect()->route('rotafugas.index');
    }


    public function show($id)
    {

        $rotafugas = Rotafuga::find($id);
        return view('rotafugas.show', ['rotafugas'=>$rotafugas]);
    }


    public function edit ($id)
    {
        $rotafugas = Rotafuga::find($id);
        $salas = Sala::all();
        return view('motoristas.edit', [
            'id' => $rotafugas->id,
            'nome' => $rotafugas->nome,
            'instrucao' => $rotafugas->instrucao,
            'nomeimagem' => $rotafugas->nomeimagem,
            'caminhoimagem' => $rotafugas->caminhoimagem,
            'sala_id' => $rotafugas->sala_id,
            'salas' => $salas
        ]);
    }



    public function update(Request $request, $id)
    {

        $rotafugas = Rotafuga::find($id);
        $rotafugas->nome = Input::get('nome');
        $rotafugas->instrucao = Input::get('instrucao');
        $rotafugas->imagem = Input::get('imagem');
        $rotafugas->sala_id = Input::get('sala_id');
        $rotafugas->save();

        return redirect()->route('rotafugas.index');
    }


    public function destroy($id)
    {

        $rotafugas = Rotafuga::find($id);
        $rotafugas->delete();

        return redirect()->route('rotafugas.index');
    }
}


