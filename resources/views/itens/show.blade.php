<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Item</title>
    <!-- Ícone da Aba -->
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/5164/5164023.png" type="image/x-icon">
    <!-- Estilos Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">

    <style>
        /* Estilos personalizados aqui */
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://static.independent.co.uk/2023/06/21/14/Worldwide%20Logistics%20Group_Header%20Image_iStock-1370066038.jpg');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            margin: 0;
        }

        header {
            background-color: #343a40;
            color: white;
            padding: 10px 0;
        }

        .nav-link {
            color: white !important;
            font-weight: bold;
        }

        .nav-link:hover {
            color: #ffc107 !important;
        }

        h1 {
            color: #007bff;
        }

        footer {
            background-color: #343a40;
            color: #ced4da;
            padding: 10px 0;
            margin-top: auto;
            width: 100%;
        }

        .container {
            background-color: #f5fffa;
            padding: 3%;
            border-radius: 20px;
            box-shadow: 0.2em 0.2em 0.5em rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 1000px;
            margin: 20px auto;
        }

        .btn-custom {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            transition: background-color 0.3s;
        }

        .btn-custom:hover {
            background-color: #0056b3;
            color: white;
        }

        .img-fullscreen {
            width: 100%;
            height: auto;
            max-width: 100%;
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .container-fluid {
            padding: 0;
        }
    </style>

</head>

<body>
    <div class="container-fluid p-0">
        <!-- Cabeçalho -->
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom bg-dark">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <i class="bi bi-bootstrap-fill" style="font-size: 2rem;"></i>
            </a>

            <!-- Menu de navegação -->
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="/" class="nav-link"><i class="bi bi-house"></i> Início</a></li>
                <li class="nav-item"><a href="{{ route('itens.index') }}" class="nav-link active" aria-current="page"><i class="bi bi-list-ul"></i> Itens</a></li>
                <li class="nav-item"><a href="{{ route('movimentacoes.index') }}" class="nav-link"><i class="bi bi-arrow-left-right"></i> Movimentações</a></li>
            </ul>
        </header>

        <div class="container mt-4">
            <!-- Visualizar Item -->
            <h1 class="my-4">Visualizar Item</h1>
            <a href="{{ route('itens.index') }}" class="btn btn-secondary mb-3"><i class="bi bi-arrow-left"></i> Voltar para a Lista de Itens</a>
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <p class="form-control">{{ $item->nome }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label">Categoria</label>
                <p class="form-control">{{ $item->categoria }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label">Quantidade</label>
                <p class="form-control">{{ $item->quantidade }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label">Preço</label>
                <p class="form-control">{{ $item->preco }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label">Imagem</label>
                @if ($item->imagem)
                <img src="{{ asset('storage/' . $item->imagem) }}" width="100">
                @else
                <p class="form-control">Nenhuma imagem disponível</p>
                @endif
            </div>
            <a href="{{ route('itens.index') }}" class="btn btn-secondary">Voltar</a>
        </div>
    </div>

    <!-- Rodapé -->
    <footer>
        <p>&copy; 2024 Paulo Junior & Jessé Vitorino</p>
    </footer>

    <!-- Scripts Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
