<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <?php include 'sisReferences.php'; ?>

  <title>Novo Produto</title>

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

        <div class="container col-md-6" style="margin-top: 100px;">
            <!-- Inicio do container de INSERT -->
            <!-- ====================================================================== -->
            <form id="cadastroForm" action="../controllers/cadastrarProduto.php" class="form-horizontal" role="form" method="POST">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                <h2 style="text-align: center;">Cadastrar Produto</h2>
                <hr>
                </div>
            </div>

            <div class="row">
                <!-- <div class="col-md-1"></div> -->
                <div class="col-md-12">
                <div class="form-group has-danger">
                    <label class="sr-only" for="name">Código do produto</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    </div>
                    <input type="text" name="codigoProduto" class="form-control" id="codigoProduto" placeholder="Código do produto">
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- <div class="col-md-1"></div> -->
                <div class="col-md-12">
                <div class="form-group has-danger">
                    <label class="sr-only" for="name">Nome do produto</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    </div>
                    <input type="text" name="produtoNome" class="form-control" id="produtoNome" placeholder="Nome do produto" required autofocus>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- <div class="col-md-1"></div> -->
                <div class="col-md-12">
                <div class="form-group has-danger">
                    <label class="sr-only" for="name">Valor de compra</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    </div>
                    <input type="number" name="valorCompra" class="form-control" id="valorCompra" placeholder="Valor de compra">
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- <div class="col-md-1"></div> -->
                <div class="col-md-12">
                <div class="form-group has-danger">
                    <label class="sr-only" for="name">Valor de venda</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    </div>
                    <input type="number" name="valorVenda" class="form-control" id="valorVenda" placeholder="Valor de venda">
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- <div class="col-md-1"></div> -->
                <div class="col-md-12">
                <div class="form-group has-danger">
                    <label class="sr-only" for="name">Quantidade máxima</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    </div>
                    <input type="number" name="qtdMaxima" class="form-control" id="qtdMaxima" placeholder="Quantidade máxima">
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- <div class="col-md-1"></div> -->
                <div class="col-md-12">
                <div class="form-group has-danger">
                    <label class="sr-only" for="name">Quantidade mínima</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    </div>
                    <input type="number" name="qtdMinima" class="form-control" id="qtdMinima" placeholder="Quantidade mínima">
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- <div class="col-md-1"></div> -->
                <div class="col-md-12">
                <div class="form-group has-danger">
                    <label class="sr-only" for="name">Fornecedor</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    </div>
                    <input type="text" name="fornecedor" class="form-control" id="fornecedor" placeholder="Fornecedor" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- <div class="col-md-1"></div> -->
                <div class="col-md-4">
                <div class="form-group has-danger">
                    <label class="sr-only" for="categoria">Categoria</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    </div>
                    <button class="btn btn-info dropdown-toggle col-md-12" type="button" id="categoriaDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categoria
                    </button>
                    <div class="dropdown-menu" aria-labelledby="categoriaDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                    </div>
                </div>

                <!-- <div class="col-md-1"></div> -->
                <div class="col-md-4">
                <div class="form-group has-danger">
                    <label class="sr-only" for="marca">Marca</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    </div>
                    <button class="btn btn-info dropdown-toggle col-md-12" type="button" id="marcaDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Marca
                    </button>
                    <div class="dropdown-menu" aria-labelledby="marcaDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                    </div>
                </div>

                <!-- <div class="col-md-1"></div> -->
                <div class="col-md-4">
                <div class="form-group has-danger">
                    <label class="sr-only" for="unidade">Unidade</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    </div>
                    <button class="btn btn-info dropdown-toggle col-md-12" type="button" id="unidadeDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
          
      </div>
    </div>
  </body>
</html>