{{-- resources/views/librarians/show.blade.php --}}
@extends('layouts.app')

@php
    use Carbon\Carbon;
@endphp

@section('content')
    <div class="container">
        <h1>Detalhes do Bibliotecário</h1>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <td>{{ $librarian->id }}</td>
            </tr>
            <tr>
                <th>Nome</th>
                <td>{{ $librarian->name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $librarian->email }}</td>
            </tr>
            <tr>
                <th>Data de Nascimento</th>
                <td>{{ Carbon::parse($librarian->birth_date)->format('d/m/Y') }}</td>
            </tr>
            <tr>
                <th>Telefone</th>
                <td>{{ $librarian->phone ?? 'Não informado' }}</td>
            </tr>
            <tr>
                <th>CPF</th>
                <td>{{ $librarian->cpf ?? 'Não informado' }}</td>
            </tr>
            <tr>
                <th>Data de Criação</th>
                <td>{{ Carbon::parse($librarian->created_at)->format('d/m/Y H:i') }}</td>
            </tr>
            <tr>
                <th>Última Atualização</th>
                <td>{{ Carbon::parse($librarian->updated_at)->format('d/m/Y H:i') }}</td>
            </tr>
        </table>
        <div class="d-flex">
            <a href="{{ route('librarians.index') }}" class="btn btn-secondary me-2">Voltar</a>
        </div>
    </div>
@endsection
