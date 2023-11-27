@extends('layouts.app')
@section('conteudo')

<h1>Lista de Usuários</h1>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Login</th>
            <th>Senha</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->id  }}</td>
                <td>{{ $usuario->nome }}</td>
                <td>{{ $usuario->login }}</td>
                <td>{{ $usuario->senha }}</td>
            </tr>
        @endforeach
    </tbody>
</table>