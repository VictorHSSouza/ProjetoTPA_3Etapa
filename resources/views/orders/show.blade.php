{{-- resources/views/orders/show.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalhes do Cliente</h1>
        <table class="table table-bordered">
            <tr>
                <th>ID do Cliente</th>
                <td>{{ $order->id_customer }}</td>
            </tr>
            <tr>
                <th>ID do Bibliotecário</th>
                <td>{{ $order->id_librarian }}</td>
            </tr>
            <tr>
                <th>Data e Hora</th>
                <td>{{ $order->date_time->format('d/m/Y H:i') }}</td>
            </tr>
        </table>
        <a href="{{ route('orders.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
@endsection
