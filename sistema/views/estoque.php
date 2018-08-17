<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <?php require_once "sisReferences.php" ?>

  <title>Estoque</title>

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
          <h1>Estoque</h1>

          <div>
            <a href="novoProduto.php" class="btn btn-success">Novo Produto</a>
          </div>

          <div class="container row col-md-10">
            
            <div class="container" style="margin-top: 50px;">
              <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                  <h2 style="text-align: center;">Produtos Cadastrados</h2>
                </div>
              </div>
              <div class="row" style="width:125%;">

                <!-- Inicio do grid -->
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nome</th>
                      <th>Valor Compra</th>
                      <th>Valor Venda</th>
                      <th>Quantidade em estoque</th>
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
                        <td>1
                          <?php //echo $show['ID_USUARIO']?>
                        </td>
                        <td>cabeça do meu pau
                          <?php //echo $show['LOGIN_USUARIO']?>
                        </td>
                        <td>100,00
                          <?php //echo $show['EMAIL_USUARIO']?>
                        </td>
                        <td>150,00
                          <?php //echo $show['NOME_USUARIO']?>
                        </td>
                        <td>3
                          <?php //echo $show['NOME_USUARIO']?>
                        </td>
                        <td>5
                          <?php //echo $show['NOME_USUARIO']?>
                        </td>
                        <td>1
                          <?php //echo $show['NOME_USUARIO']?>
                        </td>
                        <td>cm
                          <?php //echo $show['NOME_USUARIO']?>
                        </td>
                        <td>Objeto de prazer
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
                  </tbody>
                </table> <!-- Fim do grid -->
              </div> <!-- fim div class="row" -->
            </div> <!-- fim div class="container" - grid dos produtos -->
          </div> <!-- container com a porra toda -->
        </main>
      </div>
    </div>

</body>

</html>