@extends('layouts.app')

@section('title', 'Clientes')

@section('content')
    <h1 class="mb-4">Lista de Clientes</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @for($i = 1; $i <= 5; $i++)
                <tr>
                    <td>{{ $i }}</td>
                    <td>Cliente {{ $i }}</td>
                    <td>
                        <a href="{{ route('admin.clientes.show', $i) }}" class="btn btn-sm btn-primary">Ver</a>
                    </td>
                </tr>
            @endfor
        </tbody>
    </table>
@endsection
