{{-- resources/views/order/edit.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Pedido</h1>
    <form action="{{ route('order.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_librarian">Id da livraria</label>
            <input type="number" class="form-control" name="id_librarian" required>
        </div>
        <div class="form-group">
            <label for="id_customer">Id cliente</label>
            <input type="number" class="form-control" name="id_customer" required>
        </div>
        <div class="form-group">
            <label for="date_time">Data de Criação</label>
            <input type="date" class="form-control" name="date_time" required>
        </div>
        <button type="submit" class="btn btn-success">Atualizar</button>
    </form>
</div>
@endsection
