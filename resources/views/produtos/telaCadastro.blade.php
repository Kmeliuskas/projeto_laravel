@extends('layouts.app')
@section('produtos')

<h1>Cadastro de Produtos</h1>
<form action="{{route('usuarios.novo')}}" method="get">
    @csrf
    <input type="text" name="nome_produto" placeholder="Digite seu Produto">
    <input type="text" name="descricao" placeholder="Digite sua descrição">
    <input type="number" name="quant_ini" placeholder="Digite seu nome">
    <input type="text" name="valor" placeholder="Digite seu valor">
    <input type="text" name="categoria" placeholder="Digite sua categoria">

    <select>
        <option value="1">SC</option>
        <option value="2">RS</option>
        <option value="3">SP</option>
    </select>

    <input type="submit">
</form>