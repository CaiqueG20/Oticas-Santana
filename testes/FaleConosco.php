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
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container px-4 px-lg-5">
            <img class="navbar-brand" src="images/logoteste.png" alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.html">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="QuemSomos.html">Quem Somos</a></li>
                    <li class="nav-item"><a class="nav-link" href="FaleConosco.html">Fale Conosco</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Óculos</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="index.html">Lançamentos</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li><a class="dropdown-item" href="index.html">Óculos de Grau</a></li>
                            <li><a class="dropdown-item" href="index.html">Óculos de Sol</a></li>
                        </ul>
                    </li> 
                </ul>
                <div class="aling-self-end">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="Cadastro.html" class="nav-link">Cadastre-se</a>
                        </li>
                        <li class="nav-item">
                            <a href="login.html" class="nav-link">Login</a>
                        </li>
                       
                <form class="d-flex" action="Carrinho.html">
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Carrinho
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
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
    <main>
        <div class="container">
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <h1 class=" mb-3 text-center">Fale Conosco:</h1>
            <hr>
            <div class="row justify-content-center">
                <form action="cadastro.php" id="formulario" class="col-sm-10 col-md-8 col-lg-6">
             <div class="form-floating mb-3">
                    <input type="email" class="form-control" autofocus id="txtEmail" 
                        placeholder=" ">
                    <label for="txtEmail">E-mail</label>
             </div>
             <div class="form-floating mb-3">
                <textarea class="form-control" id="txtMensagem"
                    placeholder=" " style="height: 200px;"></textarea>
                    <label for="txtMensagem">Mensagem</label>
             </div>
            <div>
             <button>Enviar Mensagem</button>
            </div>
                </form>

    </main>
    <div style="height: 273px;" class="d-block d-md-none"></div>
    <div style="height: 153px;" class="d-none d-md-block d-lg-none"></div>
    <div style="height: 129px;" class="d-none d-lg-block"></div>

    <footer class="py-1 bg-dark footer-fixo fixed-bottom">
        <div class="container">
            <p class="m-0 text-center text-white">&copy; 2024 Óticas Santana - Todos os direitos reservados.</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>