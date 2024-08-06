<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Item</title>
    <!-- Ícone da Aba -->
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/5164/5164023.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
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
            flex: 1;
        }

        .container {
            background-color: #f5fffa;
            padding: 3%;
            border-radius: 20px;
            box-shadow: 0.2em 0.2em 0.5em rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 1000px;
            margin-bottom: 20px;
        }

        footer {
            background-color: #343a40;
            color: #ced4da;
            padding: 10px 0;
            text-align: center;
            margin-top: auto;
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

        <div class="container mt-4">
            <h1 class="my-4">Adicionar Item</h1>
            <form action="{{ route('itens.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="mb-3">
                    <label for="categoria" class="form-label">Categoria</label>
                    <input type="text" class="form-control" id="categoria" name="categoria" required>
                </div>
                <div class="mb-3">
                    <label for="quantidade" class="form-label">Quantidade</label>
                    <input type="number" class="form-control" id="quantidade" name="quantidade" required>
                </div>
                <div class="mb-3">
                    <label for="preco" class="form-label">Preço</label>
                    <input type="number" step="0.01" class="form-control" id="preco" name="preco" required>
                </div>
                <div class="mb-3">
                    <label for="imagem" class="form-label">Imagem</label>
                    <input type="file" class="form-control" id="imagem" name="imagem" onchange="previewImage(event)">
                </div>
                <img id="imagePreview" src="" alt="Imagem Prévia" style="display: none;">
                <div class="d-flex justify-content-between align-items-center">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a href="{{ route('itens.index') }}" class="btn btn-secondary">Voltar</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Rodapé -->
    <footer>
        <p class="mb-0">&copy; 2024 Paulo Junior & Jessé Vitorino.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script>
        function previewImage(event) {
            const [file] = event.target.files;
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.getElementById('imagePreview');
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
</body>

</html>
