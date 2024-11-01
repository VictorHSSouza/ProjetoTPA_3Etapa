{{-- resources/views/librarians/create.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Registro de Librarian</h1>
    <form method="POST" action="{{ route('librarians.store') }}">
        @csrf

        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
            @error('nome')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="birth_date">Data de Nascimento:</label>
            <input type="date" name="birth_date" id="birth_date" class="form-control @error('birth_date') is-invalid @enderror" value="{{ old('birth_date') }}" required>
            @error('birth_date')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="phone">Telefone:</label>
            <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" required>
            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" id="cpf" class="form-control @error('cpf') is-invalid @enderror" value="{{ old('cpf') }}" required>
            @error('cpf')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="password_confirmation">Confirme a Senha</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('librarians.index') }}" class="btn btn-secondary">Cancelar</a> 
    </form>
</div>
@endsection
