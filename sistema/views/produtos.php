<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

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
      <?php require_once 'sistemaHeader.php' ?>
    </header>

    <div class="container-fluid">
      <div class="row">
      <?php require_once 'menuLateral.php'; ?>  
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