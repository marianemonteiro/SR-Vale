<?php

namespace App\Http\Controllers;
use App\Pontoencontro;
use App\Predio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class PrediosController extends Controller
{
    public function index()

    {   $pontoencontros = Pontoencontro::all();
        $predios = Predio::all();
        return view('predios.index',  ['predios'=>$predios, 'pontoencontros' => $pontoencontros]);
    }


    public function create()
    {
        $pontoencontros = Pontoencontro::all();
        $predios = Predio::all();
        return view('predios.criar',  ['predios'=>$predios, 'pontoencontros' => $pontoencontros]);
    }


    public function store(Request $request)
    {
        $predios = new Predio();
        $predios -> id  = Input::get('id');
        $predios -> nome = Input::get('nome');
        $predios -> qtdandar = Input::get('qtdandar');
        $predios -> descricao = Input::get('descricao');
        $predios -> pontoencontro_id = Input::get('pontoencontro_id');
        $predios -> save();
        //return response()->json($predios);
        return redirect()->route('predios.index');
    }


    public function show($id)
    {

        $predio = Predio::find($id);
        return view('predios.detalhes', ['predio'=>$predio]);
    }


    public function edit ($id)
    {

        $predio = Predio::find($id);
        $pontoencontros = Pontoencontro::all();
        return view('predios.edit', [
            'id' => $predio->id,
            'nome' => $predio->nome,
            'qtdandar' => $predio->qtdandar,
            'descricao' => $predio->descricao,
            'pontoencontro_id' => $predio->pontoencontro_id,
            'pontoencontros' => $pontoencontros
        ]);
    }


    public function update(Request $request, $id)
    {


        $predio = Predio::find($id);
        $predio->nome = Input::get('nome');
        $predio->qtdandar = Input::get('qtdandar');
        $predio->descricao = Input::get('descricao');
        $predio->pontoencontro_id = Input::get('pontoencontro_id');
        $predio->save();

        return redirect()->route('predios.index');
    }


    public function destroy($id)
    {

        $predio = Predio::find($id);
        $predio->delete();

        return redirect()->route('predios.index');
    }
}
