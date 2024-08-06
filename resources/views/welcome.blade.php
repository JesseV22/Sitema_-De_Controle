<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Controle de Estoque</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/5164/5164023.png" type="image/x-icon">
    <!-- Estilos Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #212121;
            color: #fff;
        }

        header {
            background-color: #212121;
            color: black;
            padding: 20px 0;
        }

        .nav-link {
            color: white !important;
            font-weight: bold;
        }

        .nav-link:hover {
            color: #0d6efd !important;
        }

        .hero-section {
            background-color: #212121;
            text-align: center;
            padding: 100px 0;
        }

        .hero-section h1 {
            color: #0d6efd;
            font-size: 3rem;
        }

        .btn-custom {
           width: 100%;
           height: 100%;
           color: #fff;
           border-radius: 30px;
           font-weight: 400;
           letter-spacing: 1px;
           text-decoration: none;
           transition: 0.5s;
           overflow: hidden;
           backdrop-filter: blur(15px);
        }

        .btn-custom:hover {
            width: 100%;
           height: 100%;
           color: #fff;
           border-radius: 30px;
           font-weight: 400;
           letter-spacing: 1px;
           text-decoration: none;
           transition: 0.5s;
           overflow: hidden;
           backdrop-filter: blur(15px);        }

        .carousel-item img {
            width: 100%;
            height: auto;
        }

        .features {
            background-image: url('https://static.independent.co.uk/2023/06/21/14/Worldwide%20Logistics%20Group_Header%20Image_iStock-1370066038.jpg');
            background-size: cover;
            /* Faz com que a imagem cubra toda a área do body */
            background-position: center;
            /* Centraliza a imagem */
            background-repeat: no-repeat;
            /* Impede a repetição da imagem */
            padding: 50px 0;
        }

        .feature-box {
            background-color: #212121;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            margin-bottom: 20px;
        }

        footer {
            background-color: #212121;
            color: #ced4da;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>

<body>
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="/" class="nav-link active" aria-current="page"><i class="bi bi-house"></i>
                    Início</a></li>
            @auth
                <li class="nav-item"><a href="{{ route('itens.index') }}" class="nav-link"><i class="bi bi-box"></i>
                        Itens</a></li>
                <li class="nav-item"><a href="{{ route('movimentacoes.index') }}" class="nav-link"><i
                            class="bi bi-arrow-left-right"></i> Movimentações</a></li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="nav-link btn btn-link"><i class="bi bi-box-arrow-right"></i>
                            Sair</button>
                    </form>
                </li>
            @else
                <li class="nav-item"><a href="{{ route('login.form') }}" class="nav-link"><i
                            class="bi bi-box-arrow-in-right"></i> Login</a></li>
                <li class="nav-item"><a href="{{ route('register.form') }}" class="nav-link"><i
                            class="bi bi-person-plus"></i> Cadastrar</a></li>
            @endauth
        </ul>
    </header>

    <main>
        <section class="hero-section">
            <div class="container">
                <h1>Sistema de Controle de Estoque</h1>
                <p class="lead">Gerencie seus produtos de forma eficiente.</p>
                <a href="{{ route('itens.index') }}" class="btn btn-custom"><i class="bi bi-box"></i> Começar</a>
            </div>
        </section>

        <section class="features">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="feature-box">
                            <i class="bi bi-shield-lock-fill" style="font-size: 2rem; color: #0d6efd;"></i>
                            <h3>Segurança</h3>
                            <p>Nosso sistema de controle de estoque oferece robustas medidas de segurança para proteger
                                seus dados e produtos. Com autenticação de dois fatores, criptografia avançada e backups
                                automáticos, garantimos que suas informações estejam sempre seguras e acessíveis apenas
                                para usuários autorizados.

                                .</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box">
                            <i class="bi bi-speedometer2" style="font-size: 2rem; color: #0d6efd;"></i>
                            <h3>Eficiência</h3>
                            <p>Aumente a eficiência do seu negócio com nosso sistema de controle de estoque. Automatize
                                processos de entrada e saída de produtos, gerencie inventários em tempo real e otimize a
                                logística de sua empresa. Nosso sistema foi projetado para reduzir o tempo gasto em
                                tarefas manuais e aumentar a produtividade.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box">
                            <i class="bi bi-people-fill" style="font-size: 2rem; color: #0d6efd;"></i>
                            <h3>Suporte</h3>
                            <p>Oferecemos suporte dedicado para ajudar você a maximizar o uso do nosso sistema de
                                controle de estoque. Nossa equipe de especialistas está disponível 24/7 para responder
                                suas perguntas, resolver problemas e fornecer treinamento personalizado. Estamos aqui
                                para garantir que você tenha a melhor experiência possível.</p>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Paulo Junior & Jessé Vitorino</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
</body>

</html>