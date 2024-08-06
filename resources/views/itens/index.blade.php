<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itens</title>
    <!-- Ícone da Aba -->
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/5164/5164023.png" type="image/x-icon">
    <!-- Estilos Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">

    <!-- Estilos CSS personalizados -->
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
            background-color: #343a40; /* Cor de fundo do cabeçalho */
            color: white; /* Cor do texto no cabeçalho */
            padding: 10px 0;
        }

        .nav-link {
            color: white !important; /* Cor do texto dos links */
            font-weight: bold; /* Texto em negrito */
        }

        .nav-link:hover {
            color: #ffc107 !important; /* Cor do texto ao passar o mouse */
        }

        h1 {
            color: #007bff; /* Cor do título principal */
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
            margin: 20px auto; /* Centraliza verticalmente */
        }

        .container-fluid {
            padding: 0;
            flex: 1;
        }

        .container {
            background-color: #f5fffa;
            padding: 3%;
            border-radius: 20px; /* Bordas arredondadas */
            box-shadow: 0.2em 0.2em 0.5em rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 1000px;
            margin-bottom: 20px;
        }

        footer {
            background-color: #343a40; /* Cor de fundo do rodapé */
            color: #ced4da; /* Cor do texto no rodapé */
            padding: 10px 0;
            text-align: center;
            margin-top: auto; /* Empurrar para a parte inferior da página */
            width: 100%;
        }
    </style>
</head>

<body>

    <div class="container-fluid p-0">
        <!-- Cabeçalho -->
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom bg-dark">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <i class="bi bi-bootstrap-fill" width="40" height="32"></i>
            </a>

            <!-- Menu de navegação -->
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="/" class="nav-link"><i class="bi bi-house"></i> Início</a></li>
                <li class="nav-item"><a href="{{ route('itens.index') }}" class="nav-link active" aria-current="page"><i class="bi bi-list-ul"></i> Itens</a></li>
                <li class="nav-item"><a href="{{ route('movimentacoes.index') }}" class="nav-link"><i class="bi bi-arrow-left-right"></i> Movimentações</a></li>
            </ul>
        </header>

        <br> <br> <br> <br>
        <div class="container mt-4">
            <h1 class="my-4">Itens</h1>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <a href="{{ route('itens.create') }}" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Adicionar Item</a>
            </div>
            @if (session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif
            <div class="table-responsive">
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Categoria</th>
                            <th>Quantidade</th>
                            <th>Preço</th>
                            <th>Imagem</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($itens as $item)
                            <tr>
                                <td>{{ $item->nome }}</td>
                                <td>{{ $item->categoria }}</td>
                                <td>{{ $item->quantidade }}</td>
                                <td>{{ $item->preco }}</td>
                                <td><img src="{{ asset('storage/' . $item->imagem) }}" width="50"></td>
                                <td>
                                    <a href="{{ route('itens.show', $item->id) }}" class="btn btn-info btn-sm"><i class="bi bi-eye"></i> Ver</a>
                                    <a href="{{ route('itens.edit', $item->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i> Editar</a>
                                    <form action="{{ route('itens.destroy', $item->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Excluir</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <a href="{{ url('/') }}" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Voltar </a>
        </div>
    </div>
<br> <br><br><br><br><br><br><br><br><br>
    <!-- Rodapé -->
    <footer>        
        <p class="mb-0">&copy; 2024 Paulo Junior & Jessé Vitorino.</p>
    </footer>

    <!-- Scripts Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

