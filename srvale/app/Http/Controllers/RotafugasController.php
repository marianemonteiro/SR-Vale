<?php

namespace App\Http\Controllers;

use App\Rotafuga;
use Illuminate\Http\Request;

class RotafugasController extends Controller
{
    public function index()
    {
        $rotafugas = Rotafuga::all();
        return view('rotafugas.index',  ['rotafugas'=>$rotafugas]);
    }


    public function create()
    {
        $rotafugas = Rotafuga::all();
        return view('rotafugas.criar',  ['rotafugas'=>$rotafugas]);
    }


    public function store(Request $request)
    {
        $predios = new Predio ();
        $predios -> id  = Input::get('id');
        $predios -> nome = Input::get('nome');
        $predios -> qtdandar = Input::get('qtdandar');
        $predios -> descricao = Input::get('descricao');
        $predios -> idpontoencontro = Input::get('idpontoencontro');

        return redirect()->route('predios.index');
    }


    public function show($id)
    {

        $predio = Predio::find($id);
        return view('predios.detalhes', ['alerta'=>$predio]);
    }


    public function edit ($id)
    {
        $predio = Predio::find($id);
        return view('predios.edit', [
            'id' => $predio->id,
            'nome' => $predio->nome,
            'qtdandar' => $predio->qtdandar,
            'descricao' => $predio->descricao,
            'idpontoencontro' => $predio->idpontoencontro
        ]);
    }


    public function update(Request $request, $id)
    {


        $predio = Predio::find($id);
        $predio->id = Input::get('id');
        $predio->nome = Input::get('nome');
        $predio->qtdandar = Input::get('qtdandar');
        $predio->descricao = Input::get('descricao');
        $predio->idpontoencontro = Input::get('idpontoencontro');
        $predio->save();

        return redirect()->route('alertas.index');
    }


    public function destroy($id)
    {

        $predio = Predio::find($id);
        $predio->delete();

        return redirect()->route('predios.index');
    }
}
