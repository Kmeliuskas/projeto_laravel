@extends('layouts.app')
@section('cadastro')

<h1>Cadastro de Usuário</h1>
<form action="{{route('usuarios.novo')}}" method="post">
    @csrf
    <input type="text" name="nome" placeholder="Digite seu nome">
    <input type="text" name="login" placeholder="Digite seu nome">
    <input type="password" name="senha" placeholder="Digite seu nome">
    <input type="submit">
</form>