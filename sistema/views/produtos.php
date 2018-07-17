<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- inclui os scripts e links de cdn -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css"> -->
  <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>  Referência para o jQuery 3-->
  <!-- <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.3/sweetalert2.all.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="https://use.fontawesome.com/0b12ac1b10.js"></script>
  <link rel="stylesheet" href="../css/style.css"> -->

  <?php require_once "sisReferences.php" ?>

  <title>Página Inicial</title>

</head>

<body>

  <?php
  session_start();
  if (!isset($_SESSION['sessao'])){
    header("Location: ../../index.php");
  }
  ?>

    <!-- inclui o header do sistema -->
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand">
          <h2 id="logo">EST</h2>
          <a href="index.php" style="text-decoration:none">
            <img src="../../img/logo.png">
            <h2 id="logo">
          </a>QUE
          </h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
          </span>
        </button>
        <a name="btnLogout" href="../controllers/logout.php" class="btn btn-danger ml-auto">
          Log out
        </a>

      </nav>
    </header>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar" style="margin-top: 10%;">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">Página Inicial</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="">Produtos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="receita.php">Receita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="despesa.php">Despesa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="vendas.php">Vendas</a>
            </li>
          </ul>
        </nav>

        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3" style="margin-top: 5%">
          <h1>Produtos</h1>

          <div class="container row col-md-10">
            <div class="container col-md-10">
              <!-- Inicio do container de INSERT -->
              <!-- ====================================================================== -->
              <form id="cadastroForm" action="insertUser.php" class="form-horizontal" role="form" method="POST">
                <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-10">
                    <h2 style="text-align: center;">Cadastrar Produtos</h2>
                    <hr>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-10">
                    <div class="form-group has-danger">
                      <label class="sr-only" for="name">Nome do produto</label>
                      <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        </div>
                        <input type="text" name="produtoNome" class="form-control" id="produtoNome" placeholder="Nome do produto" required autofocus>
                      </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-10">
                    <div class="form-group has-danger">
                      <label class="sr-only" for="name">Valor de compra</label>
                      <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        </div>
                        <input type="text" name="valorCompra" class="form-control" id="valorCompra" placeholder="Valor de compra">
                      </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-10">
                    <div class="form-group has-danger">
                      <label class="sr-only" for="name">Valor de venda</label>
                      <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        </div>
                        <input type="text" name="valorVenda" class="form-control" id="valorVenda" placeholder="Valor de venda">
                      </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-10">
                    <div class="form-group has-danger">
                      <label class="sr-only" for="name">Quantidade máxima</label>
                      <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        </div>
                        <input type="text" name="qtdMaxima" class="form-control" id="qtdMaxima" placeholder="Quantidade máxima">
                      </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-10">
                    <div class="form-group has-danger">
                      <label class="sr-only" for="name">Quantidade mínima</label>
                      <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        </div>
                        <input type="text" name="qtdMinima" class="form-control" id="qtdMinima" placeholder="Quantidade mínima">
                      </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-10">
                    <div class="form-group has-danger">
                      <label class="sr-only" for="name">Unidade</label>
                      <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        </div>
                        <button class="btn btn-secondary dropdown-toggle col-md-12" type="button" id="unidadeDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Unidade
                        </button>
                        <div class="dropdown-menu" aria-labelledby="unidadeDropdown">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-10">
                    <div class="form-group has-danger">
                      <label class="sr-only" for="name">Categoria</label>
                      <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        </div>
                        <button class="btn btn-secondary dropdown-toggle col-md-12" type="button" id="categoriaDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Categoria
                        </button>
                        <div class="dropdown-menu" aria-labelledby="categoriaDropdown">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </div>
                  </div>
                </div>

                <div class="row" style="padding-top: 1rem">
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                    <button type="submit" class="btn btn-success" id="btnCadastro" style="width: 100%;">
                      Cadastrar</button>
                  </div>
                </div>
                <hr>
              </form>
              <!-- Fim do container de INSERT -->
              <!-- ====================================================================== -->
            </div>

            <!-- Inicio da tabela de usuarios -->
            <div class="container" style="margin-top: 50px;">
              <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                  <h2 style="text-align: center;">Usuarios Cadastrados</h2>
                  <hr>
                </div>
              </div>
              <div class="row">

                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Valor Compra</th>
                        <th>Valor Venda</th>
                        <th>Quantidade máxima</th>
                        <th>Quantidade mínima</th>
                        <th>Unidade</th>
                        <th>Categoria</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        // while($show = mysqli_fetch_assoc($sql)){
                    ?>
                        <tr>
                          <td>
                            <?php //echo $show['ID_USUARIO']?>
                          </td>
                          <td>
                            <?php //echo $show['LOGIN_USUARIO']?>
                          </td>
                          <td>
                            <?php //echo $show['EMAIL_USUARIO']?>
                          </td>
                          <td>
                            <?php //echo $show['NOME_USUARIO']?>
                          </td>
                          <td>
                            <?php //echo $show['NOME_USUARIO']?>
                          </td>
                          <td>
                            <?php //echo $show['NOME_USUARIO']?>
                          </td>
                          <td>
                            <?php //echo $show['NOME_USUARIO']?>
                          </td>
                          <td>
                            <?php //echo $show['NOME_USUARIO']?>
                          </td>
                          <td>
                            <a href="testeUpdate.php?userId=<?=$show['ID_USUARIO']?>" class="btn btn-warning">
                              <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                          </td>
                          <td>
                            <a href="deleteUser.php?userId=<?=$show['ID_USUARIO']?>" class="btn btn-danger">
                              <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </a>
                          </td>
                        </tr>
                        <?php
                        // }
                        ?>
                    </tbody>
                  </table>
                  <?php
            // } else {
            //     echo "Falha ao efetuar a busca";
            // }
            ?>
              </div>
            </div>
          </div>

        </main>
      </div>
    </div>

</body>

</html>