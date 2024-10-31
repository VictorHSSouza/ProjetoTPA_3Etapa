{{-- resources/views/orders/show.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalhes do Cliente</h1>
        <table class="table table-bordered">
            <tr>
                <th>ID do Pedido</th>
                <td>{{ $order->id }}</td>
            </tr>
            <tr>
                <th>ID e Nome do Cliente</th>
                <td>{{ $order->customer->id }} - {{ $order->customer->name }}</td>
            </tr>
            <tr>
                @foreach ($order->orderdetails as $orderdetails)
                    <th>Nome do Livro</th>
                    <td>{{ $orderdetails->book->name }}</td>
                @endforeach
            </tr>
            <tr>
                <th>Data do Pedido</th>
                <td>{{ $order->created_at->format('d/m/Y H:i') }}</td>
            </tr>
        </table>
        <a href="{{ route('orders.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
@endsection
