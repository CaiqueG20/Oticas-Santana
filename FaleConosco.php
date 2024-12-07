<!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ótica Santana - Fale Conosco</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        body {
            background-color: rgb(233, 233, 255);
            font-family: Arial, sans-serif;
            margin-top: 80px; /* Ajuste para o menu fixo */
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

        input[type="email"], input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        button {
            background-color: #0069d9;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
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
                    <li class="nav-item"><a class="nav-link" href="QuemSomos.html">Quem Somos</a></li>
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

                <!-- Usando d-flex para alinhar os itens ao lado -->
                <div class="d-flex align-items-center">
                    <ul class="navbar-nav me-3">
                        <li class="nav-item"><a href="Cadastro.php" class="nav-link">Cadastre-se</a></li>
                        <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
                    </ul>
                    <form class="d-flex" action="Carrinho.php">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i> Carrinho <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <div class="container">
            <h1 class="mb-3 text-center">Fale Conosco</h1>
            <div class="form-container">
                <form action="enviado.php" method="POST">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="mensagem">Mensagem:</label>
                        <input type="text" id="mensagem" name="mensagem" required>
                    </div>
                    <button type="submit">Enviar mensagem</button>
                </form>
            </div>
        </div>
    </main>

    <footer class="footer-fixo fixed-bottom">
        <div class="container text-center">
            <p>&copy; 2024 Óticas Santana - Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
