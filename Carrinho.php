<?php
include('proibido.php');
?> 

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ótica Santana - Carrinho de Compras</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="css/stylescarrinho.css" rel="stylesheet" />
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
                <form class="d-flex">
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Carrinho
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                    </button>
                </form>
            </div>
        </div>
    </nav>
    </nav>
    <main>
        <hr>
        <hr>
        <hr>
        <hr>
        <section class="h-100 h-custom" style="background-color: #d2c9ff;">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                  <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">
                      <div class="row g-0">
                        <div class="col-lg-8">
                          <div class="p-5">
                            <div class="d-flex justify-content-between align-items-center mb-5">
                              <h1 class="fw-bold mb-0 text-black">Carrinho de Compras</h1>
                              <h6 class="mb-0 text-muted">03 intens</h6>
                            </div>
                            <hr class="my-4">
          
                            <div class="row mb-4 d-flex justify-content-between align-items-center">
                              <div class="col-md-2 col-lg-2 col-xl-2">
                                <img
                                  src="images/oculos1.jpeg"
                                  class="img-fluid rounded-3" alt="Cotton T-shirt">
                              </div>
                              <div class="col-md-3 col-lg-3 col-xl-3">
                                <h6 class="text-muted">Oculos - Adidas</h6>
                                <h6 class="text-black mb-0">Estilo Classico</h6>
                              </div>
                              <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                                  onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                  <i class="fas fa-minus"></i>
                                </button>
          
                                <input id="form1" min="0" name="quantity" value="1" type="number"
                                  class="form-control form-control-sm" />
          
                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                                  onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                  <i class="fas fa-plus"></i>
                                </button>
                              </div>
                              <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                <h6 class="mb-0">R$ 80.00</h6>
                              </div>
                              <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                              </div>
                            </div>
          
                            <hr class="my-4">
          
                            <div class="row mb-4 d-flex justify-content-between align-items-center">
                              <div class="col-md-2 col-lg-2 col-xl-2">
                                <img
                                  src="images/oculos2.jpeg"
                                  class="img-fluid rounded-3" alt="Cotton T-shirt">
                              </div>
                              <div class="col-md-3 col-lg-3 col-xl-3">
                                <h6 class="text-muted">Tecnol</h6>
                                <h6 class="text-black mb-0">Moderno</h6>
                              </div>
                              <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                                  onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                  <i class="fas fa-minus"></i>
                                </button>
          
                                <input id="form1" min="0" name="quantity" value="1" type="number"
                                  class="form-control form-control-sm" />
          
                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                                  onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                  <i class="fas fa-plus"></i>
                                </button>
                              </div>
                              <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                <h6 class="mb-0">R$ 80.00</h6>
                              </div>
                              <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                              </div>
                            </div>
          
                            <hr class="my-4">
          
                            <div class="row mb-4 d-flex justify-content-between align-items-center">
                              <div class="col-md-2 col-lg-2 col-xl-2">
                                <img
                                  src="images/Oculos3.jpeg"
                                  class="img-fluid rounded-3" alt="Cotton T-shirt">
                              </div>
                              <div class="col-md-3 col-lg-3 col-xl-3">
                                <h6 class="text-muted">DII Collection</h6>
                                <h6 class="text-black mb-0">Coleção internacional</h6>
                              </div>
                              <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                                  onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                  <i class="fas fa-minus"></i>
                                </button>
          
                                <input id="form1" min="0" name="quantity" value="1" type="number"
                                  class="form-control form-control-sm" />
          
                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                                  onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                  <i class="fas fa-plus"></i>
                                </button>
                              </div>
                              <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                <h6 class="mb-0">R$ 250.00</h6>
                              </div>
                              <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                              </div>
                            </div>
          
                            <hr class="my-4">
          
                            <div class="pt-5">
                              <h6 class="mb-0"><a href="index.php" class="text-body"><i
                                    class="fas fa-long-arrow-alt-left me-2"></i>Voltar ao inicio</a></h6>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 bg-grey">
                          <div class="p-5">
                            <h3 class="fw-bold mb-5 mt-2 pt-1">Resumo da compra</h3>
                            <hr class="my-4">
          
                            <div class="d-flex justify-content-between mb-4">
                              <h5 class="text-uppercase">03 intens</h5>
                              <h5>R$ 410.00</h5>
                            </div>
          
                            <h5 class="text-uppercase mb-3">Frete</h5>
          
                            <div class="mb-4 pb-2">
                              <select data-mdb-select-init>
                                <option value="1">Express (1 dia útil) - R$ 50.00</option>
                                <option value="2">Convencial (03 dias úteis - R$ 25.00) </option>
                                <option value="3">Gratuito (10 dias úteis)</option>
                              </select>
                            </div>
         
                            <hr class="my-4">
          
                            <div class="d-flex justify-content-between mb-5">
                              <h5 class="text-uppercase">Total da compra</h5>
                              <h5>R$ 460.00</h5>
                            </div>
                            <div>
                            <script>
                                function exibirMensagem() {
                                    alert("Compra efetuada com sucesso com sucesso!"); //mensagem de cadastro confirmado
                                   
                                }
                            </script>
          
                            <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-block btn-lg" onclick="exibirMensagem()"
                            
                              data-mdb-ripple-color="dark">Comprar</button>
                            </div>
          
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
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