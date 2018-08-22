<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <?php require_once "sisReferences.php"; ?>
  <?php require_once "../../connection.php"; ?>
  <?php require_once '../controllers/logicaProduto.php'; ?>

  <title>Fornecedores</title>

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
          <h1>Fornecedores</h1>

          <div>
            <button class="btn btn-success" data-toggle="modal" data-target="#novoFornecedor">Novo Fornecedor</button>
          </div>

          <div class="container row col-md-10">

<!-- Botão e modal teste -->
<!-- <button class="btn btn-primary" data-toggle="modal" data-target="#novoFornecedor">Exibir mensagem</button> -->
<div class="modal fade" id="novoFornecedor">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="cadastroForm" action="../controllers/cadastrarFornecedor.php" class="form-horizontal" role="form" method="POST">
        <div class="modal-header">
            <!-- <button type="button" class="close" data-dismiss="modal" style="align:center;"><span></span></button> -->
            <h4 class="modal-title">Cadastrar Fornecedor</h4>
        </div>
        <div class="modal-body">
            <!-- Inicio do container de INSERT -->
            <!-- ====================================================================== -->
            <!-- <form id="cadastroForm" action="../controllers/cadastrarFornecedor.php" class="form-horizontal" role="form" method="POST"> -->

            <div class="row">
                <div class="col-md-12">
                <div class="form-group has-danger">
                    <label class="sr-only" for="name">Razão Social</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    </div>
                    <input type="text" name="razaoSocial" class="form-control" id="razaoSocial" placeholder="Razão Social" autofocus>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                <div class="form-group has-danger">
                    <label class="sr-only" for="name">Nome Fantasia</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    </div>
                    <input type="text" name="nomeFantasia" class="form-control" id="nomeFantasia" placeholder="Nome Fantasia">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                <div class="form-group has-danger">
                    <label class="sr-only" for="name">CPF / CNPJ</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    </div>
                    <input type="number" name="cpfCnpj" class="form-control" id="cpfCnpj" placeholder="CPF / CNPJ">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                <div class="form-group has-danger">
                    <label class="sr-only" for="name">Site</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    </div>
                    <input type="text" name="site" class="form-control" id="site" placeholder="Site">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                <div class="form-group has-danger">
                    <label class="sr-only" for="name">Telefone</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    </div>
                    <input type="number" name="telefone" class="form-control" id="telefone" placeholder="Telefone">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                <div class="form-group has-danger">
                    <label class="sr-only" for="name">Email</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    </div>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                <div class="form-group has-danger">
                    <label class="sr-only" for="name">CEP</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    </div>
                    <input type="text" name="cep" class="form-control" id="cep" placeholder="CEP">
                    </div>
                </div>
            </div>

              <div class="row">
                <div class="col-md-12">
                <div class="form-group has-danger">
                    <label class="sr-only" for="name">Endereço</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    </div>
                    <input type="text" name="endereco" class="form-control" id="endereco" placeholder="Endereço">
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                <div class="form-group has-danger">
                    <label class="sr-only" for="name">Numero</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    </div>
                    <input type="text" name="numero" class="form-control" id="numero" placeholder="Numero">
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                <div class="form-group has-danger">
                    <label class="sr-only" for="name">Complemento</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    </div>
                    <input type="text" name="complemento" class="form-control" id="complemento" placeholder="Complemento">
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                <div class="form-group has-danger">
                    <label class="sr-only" for="name">Bairro</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    </div>
                    <input type="text" name="bairro" class="form-control" id="bairro" placeholder="Bairro">
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                <div class="form-group has-danger">
                    <label class="sr-only" for="name">Cidade</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    </div>
                    <input type="text" name="cidade" class="form-control" id="cidade" placeholder="Cidade">
                    </div>
                </div>
              </div>

                <div class="col-md-1"></div>
                <div class="col-md-4">
                <div class="form-group has-danger">
                    <label class="sr-only" for="unidade">Estado</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    </div>
                    <button class="btn btn-info dropdown-toggle col-md-12" type="button" id="estadoDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Estado
                    </button>
                    <div class="dropdown-menu" aria-labelledby="unidadeDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                    </div>
                </div>

            <!-- </form> -->
            <!-- Fim do container de INSERT -->
            <!-- ====================================================================== -->
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success" id="btnCadastro" style="width: 100%;">
                    Cadastrar</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
        </form>
    </div>
  </div>
</div>
            
            <div class="container" style="margin-top: 50px;">
              <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                  <h2 style="text-align: center;">Fornecedores Cadastrados</h2>
                </div>
              </div>
              <div class="row" style="width:125%;">

                <?php
                  //$sql = buscaProdutos($connection);
                  //if($sql){
                ?>

                <!-- Inicio do grid -->
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Razao Social</th>
                      <th>Nome Fantasia</th>
                      <th>CPF/CNPJ</th>
                      <th>Site</th>
                      <th>Telefone</th>
                      <th>Email</th>
                      <th>Endereço</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php //while($show = mysqli_fetch_assoc($sql)){ //print_r($show); die('ccc');?>
                      <tr>
                        <td>
                          <?php //echo $show['id_produto_prd']?>
                        </td>
                        <td>
                          <?php //echo $show['st_codigo_prd']?>
                        </td>
                        <td>
                          <?php //echo $show['st_nome_prd']?>
                        </td>
                        <td>
                          <?php //echo $show['vl_compra_prd']?>
                        </td>
                        <td>
                          <?php //echo $show['vl_venda_prd']?>
                        </td>
                        <td>
                          <?php //echo $show['qnt_minima_prd']?>
                        </td>
                        <td>
                          <?php //echo $show['qnt_maxima_prd']?>
                        </td>
                        <td>
                          <?php //echo $show['id_unidade_uni']?>
                        </td>
                        <td>
                          <?php //echo $show['id_categoria_cat']?>
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
                      <?php //} ?> <!-- Fim do while php que preenche o grid -->
                  </tbody>
                  <?php //} ?> <!-- Fim do if php com o select do grid -->
                </table> <!-- Fim do grid -->
              </div> <!-- fim div class="row" -->
            </div> <!-- fim div class="container" - grid dos produtos -->
          </div> <!-- container com a porra toda -->
        </main>
      </div>
    </div>

</body>

</html>