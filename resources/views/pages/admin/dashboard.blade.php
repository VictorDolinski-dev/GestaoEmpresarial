@extends('layouts.app')

@section('title', 'Painel Administrativo')

@section('content')
    <h1 class="mb-4">Bem-vindo ao Painel Administrativo</h1>
    <p>Escolha uma das opções abaixo:</p>
    <ul>
        <li><a href="{{ route('admin.clientes.index') }}">Gerenciar Clientes</a></li>
        <li><a href="{{ route('produtos.index') }}">Gerenciar Produtos</a></li>
    </ul>
@endsection
