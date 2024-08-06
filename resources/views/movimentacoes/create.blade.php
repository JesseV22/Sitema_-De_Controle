<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Movimentação</title>
    <!-- Ícone da Aba -->
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/5164/5164023.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <style>
        /* Estilos personalizados aqui */
        body {
            background: url('https://static.independent.co.uk/2023/06/21/14/Worldwide%20Logistics%20Group_Header%20Image_iStock-1370066038.jpg') no-repeat center center;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: 'Montserrat', sans-serif;
            height: 100vh;
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

        .container {
            background-color: #f5fffa;
            padding: 3%;
            border-radius: 20px;
            box-shadow: 0.2em 0.2em 0.5em rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 1000px;
            margin: 20px auto;
        }
    </style>
</head>

<body>
    <div class="container-fluid p-0">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom bg-dark">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <i class="bi bi-bootstrap-fill" style="font-size: 1.5rem;"></i>
            </a>
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="/" class="nav-link"><i class="bi bi-house"></i> Início</a></li>
                <li class="nav-item"><a href="{{ route('itens.index') }}" class="nav-link"><i class="bi bi-list-ul"></i>
                        Itens</a></li>
                <li class="nav-item"><a href="{{ route('movimentacoes.index') }}" class="nav-link active"
                        aria-current="page"><i class="bi bi-arrow-left-right"></i> Movimentações</a></li>
            </ul>
        </header>

        <div class="container">
            <h1 class="my-4">Registrar Movimentação</h1>
            <a href="{{ route('movimentacoes.index') }}" class="btn btn-secondary mb-3"><i class="bi bi-arrow-left"></i>
                Voltar para a Lista de Movimentações</a>
            <form action="{{ route('movimentacoes.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="item_id" class="form-label">Item</label>
                    <select class="form-control" id="item_id" name="item_id" required>
                        <option value="">Selecione um item</option>
                        @foreach ($itens as $item)
                            <option value="{{ $item->id }}">{{ $item->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="data_movimentacao" class="form-label">Data de Movimentação</label>
                    <input type="date" class="form-control" id="data_movimentacao" name="data_movimentacao" required>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>

    <!-- Rodapé -->
    <footer>
        <p>&copy; 2024 Paulo Junior & Jessé Vitorino</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>