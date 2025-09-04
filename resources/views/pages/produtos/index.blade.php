@extends('layouts.app')

@section('title', 'Lista de Produtos')

@section('content')
    <h1>Lista de Produtos</h1>
    <div class="d-flex flex-wrap gap-3 mt-4">
        @for($i = 1; $i <= 6; $i++)
            @include('components.card-produto', [
                'titulo' => "Produto $i",
                'descricao' => "Descrição do Produto $i",
                'link' => route('produtos.show', $i)
            ])
        @endfor
    </div>
@endsection
