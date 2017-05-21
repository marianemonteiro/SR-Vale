<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Illuminate\Support\Facades\Input;

class UsuariosController extends Controller
{

    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index',  ['usuarios'=>$usuarios]);
    }


    public function create()
    {
        $usuarios = Usuario::all();
        return view('usuarios.criar',  ['usuarios'=>$usuarios]);
    }


    public function store(Request $request)
    {
        $usuarios = new Usuario ();
        $usuarios -> nome  = Input::get('nome');
        $usuarios -> email = Input::get('email');
        $usuarios -> cpf = Input::get('cpf');
        $usuarios -> senha = Input::get('senha');
        $usuarios -> bloqueado = Input::get('bloqueado');
        $usuarios -> idsala = Input::get('idsala');
        $usuarios -> tipo_usuario_id = Input::get('tipo_usuario_id');
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
        $usuario = Usuario::find($id);
        return view('usuarios.edit', [
            'id' => $usuario->id,
            'nome' => $usuario->nome,
            'email' => $usuario->email,
            'cpf' => $usuario->cpf,
            'senha' => $usuario->senha,
            'bloqueado' => $usuario->bloqueado,
            'idsala' => $usuario->idsala,
            'tipo_usuario_id' => $usuario->tipo_usuario_id
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
        $usuario->idsala = Input::get('idsala');
        $usuario->tipo_usuario_id = Input::get('tipo_usuario_id');
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


