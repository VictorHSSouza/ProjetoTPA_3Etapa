{{-- <resources>
<views>
<librarian></librarian>/show.blade.php --}}
@extends('layouts.app')

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
                <th>Numero de Registro</th>
                <td>{{ $librarian->registration ?? 'Não informado' }}</td>
            </tr>
            <tr>
                <th>Telefone</th>
                <td>{{ $librarian->phone ?? 'Não informado' }}</td>
            </tr>
        </table>
        <a href="{{ route('librarian.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
@endsection
