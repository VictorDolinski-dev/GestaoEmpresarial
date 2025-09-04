@extends('layouts.app')

@section('title', 'Página Inicial')

@section('content')
<div class="text-center mb-5">
    <h1 class="mb-3">Bem-vindo à Gestão Empresarial</h1>
    <p class="lead">Gerencie sua empresa com eficiência utilizando nosso sistema.</p>
</div>

<h2 class="mb-4">Produtos em Destaque</h2>
<div class="row">
    @for($i = 1; $i <= 3; $i++)
        <div class="col-md-4 mb-3">
            @include('components.card-produto', [
                'titulo' => "Produto $i",
                'descricao' => "Descrição breve do Produto $i",
                'link' => route('produtos.show', $i)
            ])
        </div>
    @endfor
</div>
@endsection
