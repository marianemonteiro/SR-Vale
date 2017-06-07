<?php

namespace App\Http\Controllers;

use App\Alerta;
use App\Mensagen;
use App\Tipoalerta;
use App\Tipomensagen;
use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class MensagensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

    }


    public function create()
    {
        $tipoalertas = Tipoalerta::all();
        $tipomensagens = Tipomensagen::all();
        $usuarios = Usuario::all();
        return view('mensagens.criar',
                                    ['tipoalertas'=>$tipoalertas,
                                        'tipomensagens' => $tipomensagens,
                                        'usuarios' => $usuarios,
                                        'alerta_id' => Input::get('alerta_id')]);
    }


    public function store(Request $request)
    {
        $mensagens = new Mensagen();
        $mensagens -> id  = Input::get('id');
        $mensagens -> conteudo = Input::get('conteudo');
        $mensagens -> data = Input::get('data');
        $mensagens -> tipomensagen_id = Input::get('tipomensagen_id');
        $mensagens -> tipoalerta_id = Input::get('tipoalerta_id');
        $mensagens -> usuario_id = Input::get('usuario_id');
        $mensagens -> alerta_id = Input::get('alerta_id');
        $mensagens -> save();


        return redirect()->route('alertas.index');
    }


    public function show($id)
    {

    }


    public function edit ($id)
    {

    }


    public function update(Request $request, $id)
    {



    }


    public function destroy($id)
    {


    }
}
