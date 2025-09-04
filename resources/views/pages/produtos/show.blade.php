@extends('layouts.app')

@section('title', 'Detalhes do Produto')

@section('content')
    <h1>Detalhes do Produto {{ $id }}</h1>
    <p>Aqui você pode ver informações detalhadas do produto {{ $id }}.</p>
@endsection
