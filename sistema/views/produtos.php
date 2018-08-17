<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <?php require_once "sisReferences.php" ?>

  <title>Produtos</title>

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
            

            
          </div> <!-- container com a porra toda -->
        </main>
      </div>
    </div>

</body>

</html>