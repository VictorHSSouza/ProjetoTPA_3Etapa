{{-- resources/views/orders/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Pedido</h1>
    <a href="{{ route('orders.create') }}" class="btn btn-primary">Adicionar Pedido</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID Pedido</th>
                <th>ID e Nome do Cliente</th>
                <th>Data de Criação</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->customer->id }} - {{ $order->customer->name }}</td>
                <td>{{ $order->created_at }}</td>
                <td>
                    <a href="{{ route('orders.show', $order->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
