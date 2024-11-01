{{-- resources/views/librarians/index.blade.php --}}
@extends('layouts.app')
@php
    use Carbon\Carbon;
@endphp

@section('content')
    <div class="container">
        <h1>Lista de Bibliotecários</h1>
        <a href="{{ route('librarians.create') }}" class="btn btn-primary mb-3">Adicionar Novo Bibliotecário</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Data de Nascimento</th>
                    <th>Telefone</th>
                    <th>CPF</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($librarians as $librarian)
                    <tr>
                        <td>{{ $librarian->id }}</td>
                        <td>{{ $librarian->name }}</td>
                        <td>{{ $librarian->email }}</td>
                        <td>{{ Carbon::parse($librarian->birth_date)->format('d/m/Y') }}</td>
                        <td>{{ $librarian->phone }}</td>
                        <td>{{ $librarian->cpf }}</td>
                        <td>
                            <a href="{{ route('librarians.show', $librarian->id) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('librarians.edit', $librarian->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('librarians.destroy', $librarian->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
