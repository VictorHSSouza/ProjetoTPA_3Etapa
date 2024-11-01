@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-3">Editar Pedido</h1>
    <form action="{{ route('orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Para indicar que é um update -->
        
        <div class="form-group">
            <label for="id_book">Livro:</label>
            <select class="form-control" name="id_book[]" id="id_book" required>
                <option value="">Selecione um Livro</option>
                @foreach ($books as $book)
                    <option value="{{ $book->id }}" {{ in_array($book->id, $order->orderDetails->pluck('id_book')->toArray()) ? 'selected' : '' }}>
                        {{ $book->id }} - {{ $book->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="id_customer">Cliente:</label>
            <select class="form-control" name="id_customer" id="id_customer" required>
                <option value="">Selecione um Cliente</option>
                @foreach ($customers as $customer)
                    <option value="{{ $customer->id }}" {{ $customer->id == $order->id_customer ? 'selected' : '' }}>
                        {{ $customer->id }} - {{ $customer->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <input type="hidden" value="1" class="form-control" name="id_librarian" id="id_librarian" required>
        </div>

        <button type="submit" class="btn btn-success">Atualizar</button>
        <a href="{{ route('orders.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
