<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Movimentação</title>
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
            background-color: #007bff;
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
            text-align: center;
            margin-top: auto; /* Empurrar para a parte inferior da página */
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
            flex: 1;
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
                <li class="nav-item"><a href="{{ route('itens.index') }}" class="nav-link"><i class="bi bi-list-ul"></i> Itens</a></li>
                <li class="nav-item"><a href="{{ route('movimentacoes.index') }}" class="nav-link active" aria-current="page"><i class="bi bi-arrow-left-right"></i> Movimentações</a></li>
            </ul>
        </header>

        <div class="container mt-4">
            <!-- Editar Movimentação Formulário -->
            <h1 class="my-4">Editar Movimentação</h1>
            <a href="{{ route('movimentacoes.index') }}" class="btn btn-secondary mb-3"><i class="bi bi-arrow-left"></i> Voltar para a Lista de Movimentações</a>
            <form action="{{ route('movimentacoes.update', $movimentacao->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="item_id" class="form-label">Item</label>
                    <select class="form-control" id="item_id" name="item_id" required>
                        <option value="">Selecione um item</option>
                        @foreach ($itens as $item)
                            <option value="{{ $item->id }}" {{ $item->id == $movimentacao->item_id ? 'selected' : '' }}>{{ $item->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="data_movimentacao" class="form-label">Data de Movimentação</label>
                    <input type="date" class="form-control" id="data_movimentacao" name="data_movimentacao" value="{{ $movimentacao->data_movimentacao }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>

    <!-- Rodapé -->
    <footer>
        <p>&copy; 2024 Seu Nome. Todos os direitos reservados.</p>
    </footer>

    <!-- Scripts Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
