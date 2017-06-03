<?php

namespace App\Http\Controllers\Api;

use App\Pontoencontro;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PontoencontrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Pontoencontro::All();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pontoencontro = new Pontoencontro();

        $pontoencontro->nome = Input::get('nome');
        $pontoencontro->instrucao = Input::get('instrucao');
        $pontoencontro->save();
        return $pontoencontro;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pontoencontro = new Pontoencontro();
        $pontoencontro->nome = Input::get('nome');
        $pontoencontro->instrucao = Input::get('instrucao');
        $pontoencontro->save();
        return $pontoencontro;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Pontoencontro::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pontoencontro = Pontoencontro::find($id);

        if($pontoencontro) {
            $pontoencontro->nome = Input::get('nome');
            $pontoencontro->instrucao = Input::get('instrucao');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pontoencontro = Pontoencontro::find($id);

        if($pontoencontro){
            $pontoencontro->nome = Input::get('nome');
            $pontoencontro->instrucao = Input::get('instrucao');
            $pontoencontro->save();
            return $pontoencontro;
        }

        return response()->json([
            'erro' => 'Ponto de encontro inexistente'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pontoencontro = Pontoencontro::find($id);

        if($pontoencontro){
            $pontoencontro->delete();
            return response()->json([
                'mensagem' => 'Ponto de encontro excluido'
            ]);
        }
        return response()->json([
            'erro' => 'Ponto de encontro inexistente'
        ]);
    }
}
