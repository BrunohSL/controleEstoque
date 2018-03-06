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

  <?php
  session_start();
  if (!isset($_SESSION['sessao'])){
    header("Location: ../index.php");
  }
  ?>

    <!-- inclui o header do sistema -->
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand">
          <h2 id="logo">EST
            <a href="index.php" style="text-decoration:none">
              <img src="img/logo.png">
            </a>QUE
          </h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
          </span>
        </button>
        <!-- <form class="ml-auto" action="logout.php"> -->
          <a name="btnLogout" href="logout.php" class="btn btn-danger ml-auto">
            Log out
          </a>
        <!-- </form> -->
        
      </nav>
    </header>

    <div class="container-fluid">
      <div class="row">
        <?php
  if (isset($_SESSION['sessao'])){ ?>

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
          <?php } ?>


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