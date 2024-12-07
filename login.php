<?php
include ('conexao.php');
if(isset($_POST['email']) || isset($_POST['senha'])){
  if(strlen($_POST['email']) == 0 ){
    echo "Preencha seu e-mail";
  } else if (strlen($_POST['senha']) == 0){
    echo "Preencha sua senha";
  } else{

    $email = $mysqli -> real_escape_string($_POST['email']);
    $senha = $mysqli -> real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $mysqli -> query($sql_code) or die("Falha na execução do SQL " . $mysqli->error);

    $quantidade = $sql_query->num_rows;
    if($quantidade == 1 ) {
      $usuario = $sql_query -> fetch_assoc();
      if(!isset($_SESSION)) {
        session_start();
      }

      $_SESSION['nome'] = $usuario['nome'];

      header("Location: painel.php");
    } else {
      echo "Falha ao logar! E-mail ou senha incorretos";

    }
  } 
}
?>
<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ótica Santana - Login</title>
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
                        <li><a class="dropdown-item" href="#regiao-alvo">Lançamentos</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#oculos-grau">Óculos de Grau</a></li>
                        <li><a class="dropdown-item" href="#oculos-sol">Óculos de Sol</a></li>
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

  <!-- Jumbotron -->
  <div class="container py-4">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right bg-body-tertiary" style="
            backdrop-filter: blur(30px);
            ">
          <div class="card-body p-5 shadow-5 text-center">
            <h2 class="fw-bold mb-5">Login</h2>
            <form action="" method="POST">
              <P>
              <label>E-mail</label> 
              <input type="text" name="email" required><br><br>
              </P>
              <P>
              <label>Senha</label>
              <input type="password" name="senha" required><br><br>
              </P>
              <p>
              <button type="submit">Entrar</button>
              </p>
              <div class="text-center">
                <p class="mt-3">
                    Ainda não é cadastrado ? <a href="Cadastro.php">Clique aqui</a> Para se Cadastrar</p>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0">
        <img src="images/login.jpeg" class="w-100 rounded-4 shadow-4"
          alt="" />
      </div>
    </div>
  </div>
</section>
    
        
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