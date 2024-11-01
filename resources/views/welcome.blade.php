<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="/resources/css/app.css">
    
</head>
<body>
    <header class="text-center py-5 mt-5">
            <h1>Bem-vindo ao Sistema de Biblioteca</h1>
            <p class="lead">Gerencie seus livros e clientes com facilidade.</p>
            <a href="{{ route('dashboard') }}" class="btn btn-primary">Ir para o Dashboard</a>
        </header>

        <section class="p-0 m-0 text-center row">
            <div class="row ">
                <div class="col-md-4 p-0">
                    <h3>Gerenciamento de Livros</h3>
                    <p>Adicione, edite e exclua livros do seu acervo facilmente.</p>
                </div>
                <div class="col-md-4 p-0">
                    <h3>Controle de Clientes</h3>
                    <p>Gerencie informações dos seus clientes de forma eficiente.</p>
                </div>
                <div class="col-md-4 p-0">
                    <h3>Pedidos</h3>
                    <p>Gerencie os pedidos dos livros de forma organizada.</p>
                </div>
            </div>
        </section>
    
    <footer class="bg-dark text-white text-center position-absolute bottom-0 w-100 py-4">
        <div class="container">
            <p class="mb-0">&copy; {{ date('Y') }} Biblioteca. Todos os direitos reservados.</p>
            <ul class="list-inline text-center row justify-content-center text-center">
                <li class="list-inline-item">
                    <a href="https://github.com/VictorHSSouza/ProjetoTPA_3Etapa" class="text-white">GitHub</a>
                    <li class="col col-2"><a href="https://6531c625c9a3092bfe71684e--remarkable-taiyaki-ae25f5.netlify.app/?authuser=0" class="text-white ">Isaac Lima</a></li>
                    -
                    <li class="col col-2"><a href="https://meusiteportfoliocompleto.netlify.app/" class="text-white">Victor Henrique</a></li>
                    -
                    <li class="col col-2"><a href="https://prortfoliothiagohs.netlify.app/" class="text-white">Thiago Hermont</a></li>
                </li>
            </ul>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
