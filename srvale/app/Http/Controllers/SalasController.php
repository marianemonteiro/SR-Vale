<?php

namespace App\Http\Controllers;

use App\Predio;
use App\Sala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SalasController extends Controller
{
    public function index()
    {
        $predios = Predio::all();
        $salas = Sala::all();
        return view('salas.index',  ['salas'=>$salas, 'predios' => $predios]);
    }


    public function create()
    {
        $predios = Predio::all();
        $salas = Sala::all();
        return view('salas.criar',  ['salas'=>$salas, 'predios' => $predios]);
    }


    public function store(Request $request)
    {
        $salas = new Sala ();
        $salas -> nome  = Input::get('nome');
        $salas -> numero = Input::get('numero');
        $salas -> andar = Input::get('andar');
        $salas -> predio_id = Input::get('predio_id');
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
        $predios = Predio::all();
        return view('salas.edit', [
            'id' => $sala->id,
            'nome' => $sala->nome,
            'numero' => $sala->numero,
            'andar' => $sala->andar,
            'predio_id' => $sala->predio_id,
            'predios' => $predios
        ]);
    }


    public function update(Request $request, $id)
    {


        $sala = Sala::find($id);
        $sala->nome = Input::get('nome');
        $sala->numero = Input::get('numero');
        $sala->andar = Input::get('andar');
        $sala->predio_id = Input::get('predio_id');
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
