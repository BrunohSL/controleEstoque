<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- inclui os scripts e links de cdn -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
  <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>  Referência para o jQuery 3-->
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.3/sweetalert2.all.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="https://use.fontawesome.com/0b12ac1b10.js"></script>
  <link rel="stylesheet" href="../css/style.css">

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
          <h2 id="logo"></a>QUE
        </h2>
      </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
          </span>
        </button>
        <!-- <form class="ml-auto" action="logout.php"> -->
          <a name="btnLogout" href="../controllers/logout.php" class="btn btn-danger ml-auto">
            Log out
          </a>
        <!-- </form> -->
        
      </nav>
    </header>

    <div class="container-fluid">
      <div class="row">
          <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar" style="margin-top: 10%;">
            <ul class="nav nav-pills flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="dashboard.php">Página Inicial</a>
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
              <li class="nav-item">
                <a class="nav-link" href="vendas.php">Vendas</a>
              </li>
            </ul>
          </nav>

          <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3" style="margin-top: 5%">
            <h1>Tela Inicial</h1>
            <div class"row col-md-6">
              <a href="produtos.php" class="btn btn-primary col-md-5">Cadastro de Produtos</a>
              <a href="vendas.php" style="margin-left: 40px;" class="btn btn-primary col-md-5">Nova Venda</a>
            </div>

          </main>
      </div>
    </div>

  </body>
</html>