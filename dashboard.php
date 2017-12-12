<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <?php 
  include 'references.php';
  $teste = $_GET['name'];

  // die($teste);
  ?>

  <title>Dashboard Template for Bootstrap</title>

  <!-- Bootstrap core CSS -->
  <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="dashboard.css" rel="stylesheet">
</head>

<body>
  <!-- <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" id="logo">
        <h2>EST
          <img src="img/logo.png"> QUE</h2>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto" id="teste">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only"></span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cadastro.php">Cadastre-se</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="">Entrar</a>
          </li>
        </ul>
      </div>
    </nav>
  </header> -->

  <?php include 'teste.php';?>

  <div class="container-fluid">
    <div class="row">
      <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">Overview
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Reports</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Analytics</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Export</a>
          </li>
        </ul>

        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a class="nav-link" href="#">Nav item</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Nav item again</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">One more nav</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Another nav item</a>
          </li>
        </ul>

        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a class="nav-link" href="#">Nav item again</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">One more nav</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Another nav item</a>
          </li>
        </ul>
      </nav>

      <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
        <h1>Dashboard</h1>

        <h2>Section title</h2>
        <div class="table-responsive col-md-3">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Header</th>
                <th>Header</th>
                <th>Header</th>
                <th>Header</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1,001</td>
                <td>Lorem</td>
                <td>ipsum</td>
                <td>dolor</td>
                <td>sit</td>
              </tr>
              <tr>
                <td>1,002</td>
                <td>amet</td>
                <td>consectetur</td>
                <td>adipiscing</td>
                <td>elit</td>
              </tr>
              <tr>
                <td>1,003</td>
                <td>Integer</td>
                <td>nec</td>
                <td>odio</td>
                <td>Praesent</td>
              </tr>
              <tr>
                <td>1,003</td>
                <td>libero</td>
                <td>Sed</td>
                <td>cursus</td>
                <td>ante</td>
              </tr>
              <tr>
                <td>1,004</td>
                <td>dapibus</td>
                <td>diam</td>
                <td>Sed</td>
                <td>nisi</td>
              </tr>
              <tr>
                <td>1,005</td>
                <td>Nulla</td>
                <td>quis</td>
                <td>sem</td>
                <td>at</td>
              </tr>
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>

  <!-- Bootstrap core JavaScript
================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')
  </script>
  <script src="../../../../assets/js/vendor/popper.min.js"></script>
  <script src="../../../../dist/js/bootstrap.min.js"></script>


  <div id="lo-engage-ext-container">
    <div data-reactroot=""></div>
  </div>
  <link rel="stylesheet" type="text/css" href="chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/css/content.css">
</body>

</html>