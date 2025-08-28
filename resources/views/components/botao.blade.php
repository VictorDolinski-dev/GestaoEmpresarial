@props(['tipo' => 'button', 'classe' => 'btn-primary', 'texto' => 'Clique aqui'])

<button type="{{ $tipo }}" class="btn {{ $classe }}">
    {{ $texto }}
</button>
