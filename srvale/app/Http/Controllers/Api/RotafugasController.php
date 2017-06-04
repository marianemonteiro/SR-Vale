<?php

namespace App\Http\Controllers\Api;

use App\Rotafuga;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RotafugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Rotafuga::All();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rotafuga = new Rotafuga();

        $rotafuga->nome = Input::get('nome');
        $rotafuga->instrucao = Input::get('instrucao');
        $rotafuga->imagem = Input::get('imagem');

        //Tabela intermediária, anexando
        $rotafuga -> salas()->attach(Input::get('sala_id'));


        $rotafuga->save();
        return $rotafuga;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rotafuga = new Rotafuga();
        $rotafuga->nome = Input::get('nome');
        $rotafuga->instrucao = Input::get('instrucao');
        $rotafuga->imagem = Input::get('imagem');
        $rotafuga->save();
        return $rotafuga;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Rotafuga::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rotafuga = Rotafuga::find($id);

        if($rotafuga) {
            $rotafuga->nome = Input::get('nome');
            $rotafuga->instrucao = Input::get('instrucao');
            $rotafuga->imagem = Input::get('imagem');
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
        $rotafuga = Rotafuga::find($id);

        if($rotafuga){
            $rotafuga->nome = Input::get('nome');
            $rotafuga->instrucao = Input::get('instrucao');
            $rotafuga->imagem = Input::get('imagem');

            //Tabela intermediária, anexando
            $rotafuga -> salas()->attach(Input::get('sala_id'));

            $rotafuga->save();
            return $rotafuga;
        }

        return response()->json([
            'erro' => 'Rota de fuga inexistente'
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
        $rotafuga = Rotafuga::find($id);

        if($rotafuga){
            $rotafuga->delete();
            return response()->json([
                'mensagem' => 'Rota de fuga excluido'
            ]);
        }
        return response()->json([
            'erro' => 'Rota de fuga inexistente'
        ]);
    }
}
