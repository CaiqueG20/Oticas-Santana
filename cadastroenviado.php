<?php
include("conexao.php");
$email= $_POST['email'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];


$sql = "INSERT INTO usuario (email, nome, senha) 
        VALUES ('$email', '$nome', $senha)";

if(mysqli_query($mysqli, $sql)){
    echo "Cadastro efetuado com sucesso";
}
else{
    echo "Erro";
}
mysqli_close($mysqli);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ótica Santana - Quem Somos</title>
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
                <div class="aling-self-end">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                                <a href="logout.php" class="nav-link">Sair</a>
                    </li>
                <form class="d-flex" action="Carrinho.php">
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
            <h1 class="text-center">Cadastro realizado com sucesso</h1>
            <hr>
    </main>
    <footer class="py-1 bg-dark footer-fixo fixed-bottom">
            <div class="container"><p class="m-0 text-center text-white">&copy; 2024 Óticas Santana - Todos os direitos reservados. -     Fale Conosco - (71)99112-5260</p></div>

        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <script src="js/scripts.js"></script>
    </body>
</html>
