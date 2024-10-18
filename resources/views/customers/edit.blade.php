@extends('layouts.app')

@php
    use Carbon\Carbon;
@endphp

@section('content')
    <div class="container">
        <h1>Editar Cliente</h1>
        <form action="{{ route('customers.update', $customer->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $customer->name }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $customer->email }}" required>
            </div>
            <div class="form-group">
                <label for="birth_date">Data de Nascimento</label>
                <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{ $customer->birth_date->format('Y-m-d') }}" required>
            </div>
            <div class="form-group">
                <label for="address">Endereço</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ $customer->address }}">
            </div>
            <div class="form-group">
                <label for="phone">Telefone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $customer->phone }}">
            </div>
            <button type="submit" class="btn btn-warning">Atualizar</button>
            <a href="{{ route('customers.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
    </div>
@endsection
