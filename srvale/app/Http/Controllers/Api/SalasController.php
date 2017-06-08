<?php

namespace App\Http\Controllers\Api;

use App\Rotafuga;
use App\Sala;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SalasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Sala::All();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sala = new Sala();

        $sala->nome = Input::get('nome');
        $sala->numero = Input::get('numero');
        $sala->andar = Input::get('andar');
        $sala->predio_id = Input::get('predio_id');
        $sala->save();
        return $sala;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request -> json() -> all();
        $sala = new Sala();

        $sala -> nome = $data['nome'];
        $sala -> numero = $data['numero'];
        $sala -> andar = $data['andar'];
        $sala -> predio_id = $data['predio_id'];
        $sala -> save();

        return $sala;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Sala::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $sala = Sala::find($id);

        if($sala) {
            $sala->nome = Input::get('nome');
            $sala->numero = Input::get('numero');
            $sala->andar = Input::get('andar');
            $sala->predio_id = Input::get('predio_id');
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
        $sala = Sala::find($id);

        if($sala){
            $sala->nome = Input::get('nome');
            $sala->numero = Input::get('numero');
            $sala->andar = Input::get('andar');
            $sala->predio_id = Input::get('predio_id');
            $sala->save();
            return $sala;
        }

        return response()->json([
            'erro' => 'Sala inexistente'
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
        $sala = Sala::find($id);

        if($sala){
            $sala->delete();
            return response()->json([
                'mensagem' => 'Sala excluida'
            ]);
        }
        return response()->json([
            'erro' => 'Sala inexistente'
        ]);
    }
}
