<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Óticas Santana</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container px-4 px-lg-5">
                <img class="navbar-brand" src="images/logoteste.png" alt="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="QuemSomos.html">Quem Somos</a></li>
                        <li class="nav-item"><a class="nav-link" href="FaleConosco.html">Fale Conosco</a></li>
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
                    <div class="aling-self-end">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="Cadastro.php" class="nav-link">Cadastre-se</a>
                            </li>
                            <li class="nav-item">
                                <a href="login.php" class="nav-link">Login</a>
                            </li>
                           
                    <form class="d-flex" action="Carrinho.php">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Carrinho
                            <span class="badge bg-dark text-white ms-1 rounded-pill">3</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <style>
        body {
            background-color: rgb(233, 233, 255);
        }
    </style>
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="images/oculos5.jpeg" alt="..." /></div>
                    <div class="col-md-6">
                        <h1 class="display-5 fw-bolder">Adidas</h1>
                        <div class="fs-5 mb-5">
                            <span class="text-decoration-line-through">$100.00</span>
                            <span>$80.00</span>
                        </div>
                        <p class="lead">Óculos de grau retangulares, ideais para quem busca um visual tradicional e elegante. Feitos de acetato de alta qualidade, garantem durabilidade e conforto.
                        </p>
                        <div class="d-flex">
                            <a href="Carrinho.php">>
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                            <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                <i class="bi-cart-fill me-1"></i>
                                Adicionar ao Carrinho
                            </button>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="py-1 bg-dark footer-fixo fixed-bottom">
            <div class="container"><p class="m-0 text-center text-white">&copy; 2024 Óticas Santana - Todos os direitos reservados. -     Fale Conosco - (71)99112-5260</p></div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
