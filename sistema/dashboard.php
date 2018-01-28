<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- inclui os scripts e links de cdn -->
  <?php include '../references.php';?>

  <title>Página Inicial</title>

</head>

<body>

  <!-- inclui o header do sistema -->
  <?php include '/sisHeader.php';?>

  <div class="container-fluid">
    <div class="row">
      <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar" style="margin-top: 10%;">
        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="">Página Inicial</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="produtos.php">Produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="receita.php">Receita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="despesa.php">Despesa</a>
          </li>
        </ul>
      </nav>

      <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3" style="margin-top: 5%">
        <h1>Tela Inicial</h1>

        <!-- <button class"btn btn-primary"></button> -->
        <a href="produtosCadastro.php" class="btn btn-primary col-md-12">Cadastro de Produtos</a>

        <!-- <?php //$teste = baseUrl();
        //echo $teste; ?> -->

      </main>
    </div>
  </div>

  <?php include '../sisFooter.php';?>

</body>

</html>