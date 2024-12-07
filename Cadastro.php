<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ótica Santana - Cadastro</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background-color: rgb(233, 233, 255);
            padding-top: 80px; /* Para não ficar sobrepondo o menu fixo */
        }
        h1 {
            color: #333;
            font-size: 2rem;
            margin-bottom: 20px;
        }
        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 40px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            font-weight: bold;
            color: #333;
        }
        input[type="text"], input[type="email"], input[type="password"], input[type="date"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }
        input[type="submit"] {
            background-color: #0069d9;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
        }
        footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container px-4 px-lg-5">
            <img class="navbar-brand" src="images/logoteste.png" alt="Ótica Santana" />
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="QuemSomos.php">Quem Somos</a></li>
                    <li class="nav-item"><a class="nav-link" href="FaleConosco.php">Fale Conosco</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Óculos</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="index.php">Lançamentos</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li><a class="dropdown-item" href="index.php">Óculos de Grau</a></li>
                            <li><a class="dropdown-item" href="index.php">Óculos de Sol</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="align-self-end">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="Cadastro.php" class="nav-link">Cadastre-se</a></li>
                        <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
                        <form class="d-flex" action="Carrinho.php">
                            <button class="btn btn-outline-dark" type="submit">
                                <i class="bi-cart-fill me-1"></i> Carrinho
                                <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                            </button>
                        </form>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <div class="container">
            <h1 class="text-center">Informe seus dados, por gentileza</h1>
            <div class="form-container">
                <form action="cadastroenviado.php" method="POST">
                    <fieldset class="border p-3">
                        <legend class="w-auto">Dados Pessoais</legend>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nome">Nome:</label>
                                <input type="text" id="nome" name="nome" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email">E-mail:</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="senha">Senha:</label>
                                <input type="password" id="senha" name="senha" required>
                                <small class="form-text text-muted">(Somente números)</small>
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Cadastrar">
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </main>

    <footer class="py-1 bg-dark footer-fixo fixed-bottom">
        <div class="container text-center">
            <p>&copy; 2024 Óticas Santana - Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
