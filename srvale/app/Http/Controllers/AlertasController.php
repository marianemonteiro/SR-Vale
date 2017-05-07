<?php

namespace App\Http\Controllers;
use App\Alerta;
use Illuminate\Http\Request;

class AlertasController extends Controller
{
    public function index()
    {
        return view ('alertas.index');
    }


    public function create()
    {
        return view('alertas.criar');
    }


    public function store(Request $request)
    {
        $alertas = new Alerta ();
        $alertas -> id_cliente  = Input::get('id_cliente');
        $alertas -> prioridade = Input::get('prioridade');
        $alertas -> data_criacao = Input::get('data_criacao');
        $alertas -> descricao = Input::get('descricao');
        $alertas -> qtd_aprovadores = Input::get('qtd_aprovadores');
        $alertas -> tipo_alerta_id = Input::get('tipo_alerta_id');
        $alertas -> status_alerta_id = Input::get('status_alerta_id');
        $alertas -> usuario_idusuario = Input::get('usuario_idusuario');
        $alertas -> save();

        return redirect()->route('alertas.index');
    }


    public function show($id)
    {

        $alerta = Alerta::find($id);
        return view('alertas.detalhes', ['alerta'=>$alerta]);
    }


    public function edit ($id)
    {
        $alerta = Alerta::find($id);
        return view('alertas.edit', [
            'id' => $alerta->id,
            'id_cliente' => $alerta->id_cliente,
            'prioridade' => $alerta->prioridade,
            'data_criacao' => $alerta->data_criacao,
            'descricao' => $alerta->descricao,
            'qtd_aprovadores' => $alerta->qtd_aprovadores,
            'tipo_alerta_id' => $alerta->tipo_alerta_id,
            'status_alerta_id' => $alerta->status_alerta_id,
            'usuario_idusuario' => $alerta->usuario_idusuario
        ]);
    }


    public function update(Request $request, $id)
    {


        $alerta = Alerta::find($id);
        $alerta->id_cliente = Input::get('id_cliente');
        $alerta->prioridade = Input::get('prioridade');
        $alerta->data_criacao = Input::get('data_criacao');
        $alerta->descricao = Input::get('descricao');
        $alerta->qtd_aprovadores = Input::get('qtd_aprovadores');
        $alerta->tipo_alerta_id = Input::get('tipo_alerta_id');
        $alerta->status_alerta_id = Input::get('status_alerta_id');
        $alerta->usuario_idusuario = Input::get('usuario_idusuario');
        $alerta->save();

        return redirect()->route('alertas.index');
    }


    public function destroy($id)
    {

        $alerta = Alerta::find($id);
        $alerta->delete();

        return redirect()->route('alertas.index');
    }
}
