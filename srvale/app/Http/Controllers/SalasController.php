<?php

namespace App\Http\Controllers;

use App\Sala;
use Illuminate\Http\Request;

class SalasController extends Controller
{
    public function index()
    {
        $salas = Sala::all();
        return view('salas.index',  ['salas'=>$salas]);
    }


    public function create()
    {
        $salas = Sala::all();
        return view('salas.criar',  ['salas'=>$salas]);
    }


    public function store(Request $request)
    {
        $salas = new Sala ();
        $salas -> nome  = Input::get('nome');
        $salas -> numero = Input::get('numero');
        $salas -> andar = Input::get('andar');
        $salas -> idpredio = Input::get('idpredio');
        $salas -> save();

        return redirect()->route('salas.index');
    }


    public function show($id)
    {

        $sala = Sala::find($id);
        return view('salas.detalhes', ['sala'=>$sala]);
    }


    public function edit ($id)
    {
        $sala = Sala::find($id);
        return view('salas.edit', [
            'id' => $sala->id,
            'nome' => $sala->nome,
            'numero' => $sala->numero,
            'andar' => $sala->andar,
            'idpredio' => $sala->idpredio
        ]);
    }


    public function update(Request $request, $id)
    {


        $sala = Sala::find($id);
        $sala->nome = Input::get('nome');
        $sala->numero = Input::get('numero');
        $sala->andar = Input::get('andar');
        $sala->idpredio = Input::get('idpredio');
        $sala->save();

        return redirect()->route('salas.index');
    }


    public function destroy($id)
    {

        $sala = Sala::find($id);
        $sala->delete();

        return redirect()->route('salas.index');
    }
}
