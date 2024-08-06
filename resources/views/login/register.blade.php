<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100%;
            background-color: #f8f9fa;
        }
        .form-container {
            position: absolute;
            width: 100%;
            max-width: 400px;
            padding: 2rem;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.6s ease-in-out;
        }
        .sign-up-container {
            transform: translateX(0);
        }
        .sign-in-container {
            transform: translateX(100%);
        }
        .right-panel-active .sign-up-container {
            transform: translateX(100%);
        }
        .right-panel-active .sign-in-container {
            transform: translateX(0);
        }
        .social-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1rem;
        }
        .social {
            display: inline-block;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #eee;
            color: #333;
            text-align: center;
            line-height: 40px;
            font-size: 1.2rem;
            transition: background 0.3s;
        }
        .social:hover {
            background: #ddd;
        }
        .overlay-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 200%;
            height: 100%;
            display: flex;
            transition: transform 0.6s ease-in-out;
        }
        .overlay-panel {
            width: 50%;
            padding: 2rem;
            background: #007bff;
            color: white;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .overlay-panel.overlay-left {
            transform: translateX(-100%);
        }
        .overlay-panel.overlay-right {
            transform: translateX(100%);
        }
        .right-panel-active .overlay-panel.overlay-left {
            transform: translateX(0);
        }
        .right-panel-active .overlay-panel.overlay-right {
            transform: translateX(0);
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
        span {
            display: block;
            margin: 1rem 0;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h1>Criar Conta</h1>
              
                <span>ou use seu email para registrar</span>
                <input type="text" name="name" placeholder="Nome" required />
                <input type="email" name="email" placeholder="Email" required />
                <input type="password" name="password" placeholder="Senha" required />
                <button type="submit">Cadastrar</button>
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
