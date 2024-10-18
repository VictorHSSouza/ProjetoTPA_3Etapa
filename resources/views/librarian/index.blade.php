{{-- <resources>
<views>
<librarian></librarian>/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Bibliotecário</h1>
    <a href="{{ route('librarian.create') }}" class="btn btn-primary">Adicionar Bibliotecário</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email<th>
                <th>Numero de Registro</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($librarian as $librarian)
            <tr>
                <td>{{ $librarian->id }}</td>
                <td>{{ $librarian->name }}</td>
                <td>{{ $librarian->email }}</td>
                <td>{{ $librarian->registration }}</td>
                <td>{{ $librarian->phone }}</td>
                <td>
                    <a href="{{ route('librarian.show', $librarian->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('librarian.edit', $librarian->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('librarian.destroy', $librarian->id) }}" method="POST" style="display:inline;">
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