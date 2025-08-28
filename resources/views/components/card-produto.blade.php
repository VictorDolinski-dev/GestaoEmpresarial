<div class="card" style="width: 18rem;">
    <img src="{{ $imagem ?? 'https://via.placeholder.com/150' }}" class="card-img-top" alt="{{ $titulo ?? 'Produto' }}">
    <div class="card-body">
        <h5 class="card-title">{{ $titulo ?? 'Produto' }}</h5>
        <p class="card-text">{{ $descricao ?? 'Descrição do produto' }}</p>
        <a href="{{ $link ?? '#' }}" class="btn btn-primary">Ver mais</a>
    </div>
</div>
