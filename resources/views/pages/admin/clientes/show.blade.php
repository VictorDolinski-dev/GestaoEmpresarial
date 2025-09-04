@extends('layouts.app')

@section('title', 'Detalhes do Cliente')

@section('content')
    <h1>Detalhes do Cliente {{ $id }}</h1>
    <p>Aqui você pode ver informações detalhadas do cliente {{ $id }}.</p>
@endsection
