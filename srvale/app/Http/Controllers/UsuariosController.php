<?php

namespace App\Http\Controllers;

use App\Sala;
use App\Tipousuario;
use Illuminate\Http\Request;
use App\Usuario;
use Illuminate\Support\Facades\Input;

class UsuariosController extends Controller
{

    public function index()
    {
        $salas = Sala::all();
        $tipousuarios = Tipousuario::all();
        $usuarios = Usuario::all();
        return view('usuarios.index',  ['usuarios'=>$usuarios, 'tipousuarios' => $tipousuarios,
                                        'salas' => $salas]);
    }


    public function create()
    {
        $salas = Sala::all();
        $tipousuarios = Tipousuario::all();
        $usuarios = Usuario::all();
        return view('usuarios.criar',  ['usuarios'=>$usuarios, 'tipousuarios' => $tipousuarios,
            'salas' => $salas]);
    }


    public function store(Request $request)
    {
        $usuarios = new Usuario ();
        $usuarios -> nome  = Input::get('nome');
        $usuarios -> email = Input::get('email');
        $usuarios -> cpf = Input::get('cpf');
        $usuarios -> senha = Input::get('senha');
        $usuarios -> bloqueado = Input::get('bloqueado');
        $usuarios -> sala_id = Input::get('sala_id');
        $usuarios -> tipousuario_id = Input::get('tipousuario_id');
        $usuarios -> save();

        return redirect()->route('usuarios.index');
    }


    public function show($id)
    {

        $usuario = Usuario::find($id);
        return view('usuarios.detalhes', ['usuario'=>$usuario]);
    }


    public function edit ($id)
    {
        $usuarios = Usuario::find($id);
        $salas = Sala::all();
        $tipousuarios = Tipousuario::all();
        return view('usuarios.edit', [
            'id' => $usuarios->id,
            'nome' => $usuarios->nome,
            'email' => $usuarios->email,
            'cpf' => $usuarios->cpf,
            'senha' => $usuarios->senha,
            'bloqueado' => $usuarios->bloqueado,
            'sala_id' => $usuarios->sala_id,
            'tipousuario_id' => $usuarios->tipousuario_id,
            'salas' => $salas,
            'tipousuarios' => $tipousuarios
        ]);
    }


    public function update(Request $request, $id)
    {


        $usuario = Usuario::find($id);
        $usuario->nome = Input::get('nome');
        $usuario->email = Input::get('email');
        $usuario->cpf = Input::get('cpf');
        $usuario->senha = Input::get('senha');
        $usuario->bloqueado = Input::get('bloqueado');
        $usuario->sala_id = Input::get('sala_id');
        $usuario->tipousuario_id = Input::get('tipousuario_id');
        $usuario->save();

        return redirect()->route('usuarios.index');
    }


    public function destroy($id)
    {

        $usuario = Usuario::find($id);
        $usuario->delete();

        return redirect()->route('usuarios.index');
    }
}


