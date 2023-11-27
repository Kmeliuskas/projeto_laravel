<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function cadastroProduto() {
        $produtos = Produto::all(); //Busca todos os produtos da tabela 'produtos'
        return view('produtos.telaCadastro', compact('produtos'));
    }

    public function cadastraProduto (Request $req) {
        $nomeProduto      = $req->nome_produto;
        $descricaoProduto = $req->descricao;
        $quantIni         = $req->quant_ini;
        $valorProduto     = $req->valor;
        $categoria        = $reg->categoria;
        $estadoDeOrigem   = $req->estado_de_origem;

        if($req->save()) {
            $validaMensagem = "Produto cadastrado com successo";
        } else {
            $validaMensagem = "Não foi possivel criar produto";
        }
        return view("produtos.mostraProdutos", compact("mensagem"));
    }
}
