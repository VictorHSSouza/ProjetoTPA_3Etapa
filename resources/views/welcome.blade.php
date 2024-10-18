<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Bem-vindo ao Sistema de Biblioteca</h1>
        <p class="lead">Escolha uma das opções abaixo:</p>
        <div class="list-group mt-4">
            <a href="{{ route('books.index') }}" class="list-group-item list-group-item-action">Gerenciar Livros</a>
            <a href="{{ route('customers.index') }}" class="list-group-item list-group-item-action">Gerenciar Clientes</a>
            <a href="{{ route('orders.index') }}" class="list-group-item list-group-item-action">Gerenciar Pedidos</a>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
