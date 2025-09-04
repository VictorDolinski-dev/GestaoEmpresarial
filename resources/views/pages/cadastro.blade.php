@extends('layouts.app')

@section('title', 'Cadastro')

@section('content')
    <h1 class="mb-4">Cadastro de Usuário</h1>
    <form action="#" method="POST">
        @csrf
        <x-input name="name" label="Nome" placeholder="Digite seu nome" />
        <x-input name="email" type="email" label="E-mail" placeholder="Digite seu e-mail" />
        <x-input name="password" type="password" label="Senha" placeholder="Digite sua senha" />
        <x-botao tipo="submit" classe="btn-success" texto="Cadastrar" />
    </form>
@endsection
