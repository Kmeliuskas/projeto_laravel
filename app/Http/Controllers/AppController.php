<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function telaLogin() {
        return view("login");
    }

    public function login(Request $request) {
        $login = $request->input("login");
        $senha = $request->input("senha");

        $usuario = Usuario::where("login", '=', $login)->first();

        if ($usuario && $usuario->senha == $senha) {
            return redirect()->route('usuarios.index');
        } else {
            return redirect()->route('tela.login'); //Utilizado para redirecionar para a view
        }

        //dd($usuario); //Utilizao para caso não mostrar o usuario ele mostrar algum erro como fosse um echo
    }
}
