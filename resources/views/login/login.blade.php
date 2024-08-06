<!--<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistema de Controle de Estoque</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/5164/5164023.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');
        body { font-family: 'Montserrat', sans-serif; background-color: #f8f9fa; }
        header { background-color: #343a40; color: white; padding: 10px 0; }
        .nav-link { color: white !important; font-weight: bold; }
        .nav-link:hover { color: #ffc107 !important; }
        .login-container { max-width: 400px; margin: auto; padding: 20px; }
        footer { background-color: #343a40; color: #ced4da; padding: 10px 0; }
        .btn-custom { background-color: #007bff; color: white; border: none; border-radius: 4px; padding: 10px 20px; }
        .btn-custom:hover { background-color: #0056b3; color: white; }
    </style>
</head>
<body>
    <div class="container-fluid p-0">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom bg-dark">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="/" class="nav-link">Início</a></li>
                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Cadastrar</a></li>
            </ul>
        </header>
        <div class="login-container">
            <h2 class="text-center mb-4">Login</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" required autofocus>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-custom btn-block">Entrar</button>
            </form>
        </div>
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top bg-light">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <svg class="bi" width="30" height="24">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <span class="text-muted">© 2024 Paulo Junior & Jessé Vitorino</span>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>-->


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-in-container">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h1>Entrar</h1>
                

                <span>ou use sua conta</span>
                <input type="email" name="email" placeholder="Email" required />
                <input type="password" name="password" placeholder="Senha" required />
                <button type="submit">Entrar</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Bem-vindo de Volta!</h1>
                    <p>Para se manter conectado conosco, faça login com suas informações pessoais</p>
                    <button class="ghost" id="signIn">Entrar</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Bem-vindo</h1>
                    <p>Sistema de Controle de Estoque</p>
                    <button class="ghost" id="signUp">Cadastrar</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });
    </script>
</body>

</html>