@extends('layouts.app')

@section('content')
    <div class="container mb-5">
        <h1 class="my-4">Bem-vindo ao Painel de Controle</h1>
        
        <div class="row">
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-header">Total de Clientes</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $totalCustomers }}</h5>
                        <p class="card-text">Número total de clientes cadastrados no sistema.</p>
                        <a href="{{ route('customers.index') }}" class="btn btn-light">Ver Clientes</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header">Total de Livros</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $totalBooks }}</h5>
                        <p class="card-text">Número total de livros disponíveis.</p>
                        <a href="{{ route('books.index') }}" class="btn btn-light">Ver Livros</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-header">Total de Pedidos</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $totalOrders }}</h5>
                        <p class="card-text">Número total de pedidos realizados.</p>
                        <a href="{{ route('orders.index') }}" class="btn btn-light">Ver Pedidos</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-12">
                <h2>Últimos Pedidos</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Cliente</th>
                            <th>Livro</th>
                            <th>Data do Pedido</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($recentOrders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->customer->name }}</td>
                                <td>{{ $order->book->name }}</td>
                                <td>{{ \Carbon\Carbon::parse($order->created_at)->format('d/m/Y') }}</td>
                                <td>{{ $order->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
@endsection
