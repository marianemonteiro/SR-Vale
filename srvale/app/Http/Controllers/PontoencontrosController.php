<?php

namespace App\Http\Controllers;
use App\Pontoencontro;
use Illuminate\Http\Request;

class PontoencontrosController extends Controller
{
    public function index()
    {
        $pontoencontros = Pontoencontro::all();
        return view('pontoencontros.index',  ['pontoencontros'=>$pontoencontros]);
    }


    public function create()
    {
        $pontoencontros = Pontoencontro::all();
        return view('pontoencontros.criar',  ['pontoencontros'=>$pontoencontros]);
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $pontoencontro = new Pontoencontro ();
        $pontoencontro->nome = Input::get('nome');
        $pontoencontro -> descricao = Input::get('descricao');
        $pontoencontro -> save();

        return redirect()->route('pontoencontros.index');
    }


    public function show($id)
    {

        $pontoencontro = Pontoencontro::find($id);
        return view('pontoencontros.detalhes', ['pontoencontros'=>$pontoencontro]);
    }


    public function edit ($id)
    {
        $pontoencontro = Pontoencontro::find($id);
        return view('pontoencontros.edit', [
            'id' => $pontoencontro->id,
            'nome' => $pontoencontro->nome,
            'descricao' => $pontoencontro->descricao
        ]);
    }


    public function update(Request $request, $id)
    {


        $pontoencontro = Pontoencontro::find($id);
        $pontoencontro->nome = Input::get('nome');
        $pontoencontro->descricao = Input::get('descricao');
        $pontoencontro->save();

        return redirect()->route('pontoencontros.index');
    }


    public function destroy($id)
    {

        $pontoencontro = Pontoencontro::find($id);
        $pontoencontro->delete();

        return redirect()->route('pontoencontros.index');
    }
}
