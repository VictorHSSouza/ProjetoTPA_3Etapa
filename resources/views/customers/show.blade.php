{{-- resources/views/customers/show.blade.php --}}
@extends('layouts.app')
@php
    use Carbon\Carbon;
@endphp
@section('content')
    <div class="container">
        <h1>Detalhes do Cliente</h1>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <td>{{ $customer->id }}</td>
            </tr>
            <tr>
                <th>Nome</th>
                <td>{{ $customer->name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $customer->email }}</td>
            </tr>
            <tr>
                <th>Data de Nascimento</th>
                <td>{{ Carbon::parse($customer->birth_date)->format('d/m/Y') }}</td>
            </tr>
            <tr>
                <th>Endereço</th>
                <td>{{ $customer->address ?? 'Não informado' }}</td>
            </tr>
            <tr>
                <th>Telefone</th>
                <td>{{ $customer->phone ?? 'Não informado' }}</td>
            </tr>
        </table>
        <a href="{{ route('customers.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
@endsection
