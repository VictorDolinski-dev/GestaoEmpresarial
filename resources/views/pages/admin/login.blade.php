@extends('layouts.app')

@section('title', 'Login Administrativo')

@section('content')
    <h1 class="mb-4">Área Administrativa - Login</h1>
    <form action="#" method="POST">
        @csrf
        <x-input name="email" type="email" label="E-mail" placeholder="Digite seu e-mail" />
        <x-input name="password" type="password" label="Senha" placeholder="Digite sua senha" />
        <x-botao tipo="submit" classe="btn-danger" texto="Entrar no Painel" />
    </form>
@endsection
