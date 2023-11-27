<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario; //Utilizado para Acessar o Banco atraves do usuários

class UsuarioController extends Controller
{
    public function index() {
        $usuarios = Usuario::all();
        return view("usuarios.index", compact("usuarios"));
    }

    public function  cadastro() {
        return view("usuarios.cadastro");
    }

    public function novo (Request $req) {
        $nome = $req->nome;
        $login = $req->login;
        $senha = $req->senha;
        $usuario = new Usuario();
        $usuario->nome = $nome;
        $usuario->login = $login;
        $usuario->senha = $senha;

        if($usuario->save()) {
            $mensagem = "Usuario $nome inserido com sucesso";
        } else {
            $mensagem = "Não foi possivel inserir";
        }
        return view("usuarios.resultado", compact("mensagem"));
    }

    public function busca(Request $req) {
        $usuario = Usuario::find($req->usuario_id);
    }
}
