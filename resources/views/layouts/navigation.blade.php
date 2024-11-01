<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('welcome') }}">{{ config('app.name', 'Laravel') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('customers.index') }}">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('books.index') }}">Livros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('librarians.index') }}">Bibliotecários</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('orders.index') }}">Pedidos</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <!-- Links de autenticação -->
                @if (auth()->check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">{{ auth()->user()->name }}</a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="nav-link btn btn-link">Logout</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registrar</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
