<?php

namespace App\Http\Controllers\Api;

use App\Usuario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Usuario::All();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuario = new Usuario();

        $usuario->nome = Input::get('nome');
        $usuario->email = Input::get('email');
        $usuario->cpf = Input::get('cpf');
        $usuario->senha = Input::get('senha');
        $usuario->bloqueado = Input::get('bloqueado');
        $usuario->tipousuario_id = Input::get('tipousuario_id');
        $usuario->sala_id = Input::get('sala_id');
        $usuario->save();
        return $usuario;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->nome = Input::get('nome');
        $usuario->email = Input::get('email');
        $usuario->cpf = Input::get('cpf');
        $usuario->senha = Input::get('senha');
        $usuario->bloqueado = Input::get('bloqueado');
        $usuario->tipousuario_id = Input::get('tipousuario_id');
        $usuario->sala_id = Input::get('sala_id');
        $usuario->save();
        return $usuario;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Usuario::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Usuario::find($id);

        if($usuario) {
            $usuario->nome = Input::get('nome');
            $usuario->email = Input::get('email');
            $usuario->cpf = Input::get('cpf');
            $usuario->senha = Input::get('senha');
            $usuario->bloqueado = Input::get('bloqueado');
            $usuario->tipousuario_id = Input::get('tipousuario_id');
            $usuario->sala_id = Input::get('sala_id');
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
        $usuario = Usuario::find($id);

        if($usuario){
            $usuario->nome = Input::get('nome');
            $usuario->email = Input::get('email');
            $usuario->cpf = Input::get('cpf');
            $usuario->senha = Input::get('senha');
            $usuario->bloqueado = Input::get('bloqueado');
            $usuario->tipousuario_id = Input::get('tipousuario_id');
            $usuario->sala_id = Input::get('sala_id');
            $usuario->save();
            return $usuario;
        }

        return response()->json([
            'erro' => 'Usuario inexistente'
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
        $usuario = Usuario::find($id);

        if($usuario){
            $usuario->delete();
            return response()->json([
                'mensagem' => 'Usuario excluido'
            ]);
        }
        return response()->json([
            'erro' => 'Usuario inexistente'
        ]);
    }
}
