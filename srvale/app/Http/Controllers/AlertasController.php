<?php

namespace App\Http\Controllers;
use App\Alerta;
use App\Statusalerta;
use App\Tipoalerta;
use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AlertasController extends Controller
{
    public function index()
    {
        $alertas = Alerta::all();
        $tipoalertas = Tipoalerta::all();
        $statusalertas = Statusalerta::all();
        $usuarios = Usuario::all();
        return view('alertas.index',  ['alertas'=>$alertas,
                                        'tipoalertas' => $tipoalertas,
                                        'statusalertas' => $statusalertas,
                                        'usuarios' => $usuarios,
                                        ]);
    }


    public function create()
    {
        $alertas = Alerta::all();
        $tipoalertas = Tipoalerta::all();
        $statusalertas = Statusalerta::all();
        $usuarios = Usuario::all();
        return view('alertas.criar',  ['alertas'=>$alertas,
                                        'tipoalertas' => $tipoalertas,
                                        'statusalertas' => $statusalertas,
                                        'usuarios' => $usuarios,
                                       ]);
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $alerta = new Alerta ();
        $alerta -> cliente_id = Input::get('cliente_id');
        $alerta -> prioridade = Input::get('prioridade');
        $alerta -> data_criacao = Input::get('data_criacao');
        $alerta -> descricao = Input::get('descricao');
        $alerta -> qtdaprovadores = Input::get('qtdaprovadores');
        $alerta -> tipoalerta_id = Input::get('tipoalerta_id');
        $alerta -> statusalerta_id = Input::get('statusalerta_id');
        $alerta -> usuario_id = Input::get('usuario_id');
        $alerta -> save();

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
        $tipoalertas = Tipoalerta::all();
        $statusalertas = Statusalerta::all();
        $usuarios = Usuario::all();
        return view('alertas.edit', [
            'id' => $alerta->id,
            'cliente_id' => $alerta->cliente_id,
            'prioridade' => $alerta->prioridade,
            'data_criacao' => $alerta->data_criacao,
            'descricao' => $alerta->descricao,
            'qtdaprovadores' => $alerta->qtdaprovadores,
            'tipoalerta_id' => $alerta->tipo_alerta_id,
            'statusalerta_id' => $alerta->status_alerta_id,
            'usuario_id' => $alerta->usuario_id,
            'tipoalertas' => $tipoalertas,
            'statusalertas' => $statusalertas,
            'usuarios' => $usuarios

        ]);

        //return response()->json($alerta);
    }


    public function update(Request $request, $id)
    {


        $alerta = Alerta::find($id);
        $alerta->cliente_id = Input::get('cliente_id');
        $alerta->prioridade = Input::get('prioridade');
        $alerta->data_criacao = Input::get('data_criacao');
        $alerta->descricao = Input::get('descricao');
        $alerta->qtdaprovadores = Input::get('qtdaprovadores');
        $alerta->tipoalerta_id = Input::get('tipoalerta_id');
        $alerta->statusalerta_id = Input::get('statusalerta_id');
        $alerta->usuario_id = Input::get('usuario_id');
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
