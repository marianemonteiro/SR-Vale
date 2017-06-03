<?php

namespace App\Http\Controllers\Api;

use App\Alerta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlertasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Alerta::All();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alerta = new Alerta();

        $alerta->cliente_id = Input::get('cliente_id');
        $alerta->prioridade = Input::get('prioridade');
        $alerta->data_criacao = Input::get('data_criacao');
        $alerta->qtdaprovadores = Input::get('qtdaprovadores');
        $alerta->tipoalerta_id = Input::get('tipoalerta_id');
        $alerta->stausalerta_id = Input::get('stausalerta_id');
        $alerta->usuario_id = Input::get('usuario_id');
        $alerta->save();
        return $alerta;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alerta = new Alerta();
        $alerta->cliente_id = Input::get('cliente_id');
        $alerta->prioridade = Input::get('prioridade');
        $alerta->data_criacao = Input::get('data_criacao');
        $alerta->qtdaprovadores = Input::get('qtdaprovadores');
        $alerta->tipoalerta_id = Input::get('tipoalerta_id');
        $alerta->stausalerta_id = Input::get('stausalerta_id');
        $alerta->usuario_id = Input::get('usuario_id');
        $alerta->save();
        return $alerta;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Alerta::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alerta = Alerta::find($id);

        if($alerta) {
            $alerta->cliente_id = Input::get('cliente_id');
            $alerta->prioridade = Input::get('prioridade');
            $alerta->data_criacao = Input::get('data_criacao');
            $alerta->qtdaprovadores = Input::get('qtdaprovadores');
            $alerta->tipoalerta_id = Input::get('tipoalerta_id');
            $alerta->stausalerta_id = Input::get('stausalerta_id');
            $alerta->usuario_id = Input::get('usuario_id');
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
        $alerta = Alerta::find($id);

        if($alerta){
            $alerta->cliente_id = Input::get('cliente_id');
            $alerta->prioridade = Input::get('prioridade');
            $alerta->data_criacao = Input::get('data_criacao');
            $alerta->qtdaprovadores = Input::get('qtdaprovadores');
            $alerta->tipoalerta_id = Input::get('tipoalerta_id');
            $alerta->stausalerta_id = Input::get('stausalerta_id');
            $alerta->usuario_id = Input::get('usuario_id');
            $alerta->save();
            return $alerta;
        }

        return response()->json([
            'erro' => 'Alerta inexistente'
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
        $alerta = Alerta::find($id);

        if($alerta){
            $alerta->delete();
            return response()->json([
                'mensagem' => 'Alerta excluido'
            ]);
        }
        return response()->json([
            'erro' => 'Alerta inexistente'
        ]);
    }
}
