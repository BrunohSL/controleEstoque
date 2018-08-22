<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <?php require_once "sisReferences.php"; ?>
  <?php require_once "../../connection.php"; ?>
  <?php require_once '../controllers/logicaProduto.php'; ?>

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

                <?php
                  $sql = buscaProdutos($connection);
                  if($sql){
                ?>

                <!-- Inicio do grid -->
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Codigo</th>
                      <th>Nome</th>
                      <th>Valor Compra</th>
                      <th>Valor Venda</th>
                      <!-- <th>Quantidade em estoque</th> -->
                      <th>Quantidade mínima</th>
                      <th>Quantidade máxima</th>
                      <th>Unidade</th>
                      <th>Categoria</th>
                      <!-- <th></th> -->
                    </tr>
                  </thead>

                  

                  <tbody>
                    <?php while($show = mysqli_fetch_assoc($sql)){ //print_r($show); die('ccc');?>
                      <tr>
                        <td>
                          <?php echo $show['id_produto_prd']?>
                        </td>
                        <td>
                          <?php echo $show['st_codigo_prd']?>
                        </td>
                        <td>
                          <?php echo $show['st_nome_prd']?>
                        </td>
                        <td>
                          <?php echo $show['vl_compra_prd']?>
                        </td>
                        <td>
                          <?php echo $show['vl_venda_prd']?>
                        </td>
                        <td>
                          <?php echo $show['qnt_minima_prd']?>
                        </td>
                        <td>
                          <?php echo $show['qnt_maxima_prd']?>
                        </td>
                        <td>
                          <?php echo $show['id_unidade_uni']?>
                        </td>
                        <td>
                          <?php echo $show['id_categoria_cat']?>
                        </td>
                        <td>
                        <button class="btn btn-warning" data-toggle="modal" data-target="#novoFornecedor">
                          <i class="fa fa-pencil" aria-hidden="true"></i>
                        </button>
                        
                          <!-- <a href="testeUpdate.php?userId=<?=$show['id_produto_prd']?>" class="btn btn-warning">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                          </a> -->
                        </td>
                        <td>
                          <a href="deleteUser.php?userId=<?=$show['id_produto_prd']?>" class="btn btn-danger">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                          </a>
                        </td>
                      </tr>
                      <?php } ?> <!-- Fim do while php que preenche o grid -->
                  </tbody>
                  <?php } ?> <!-- Fim do if php com o select do grid -->
                </table> <!-- Fim do grid -->
              </div> <!-- fim div class="row" -->
            </div> <!-- fim div class="container" - grid dos produtos -->
          </div> <!-- container com a porra toda -->
        </main>
      </div>
    </div>

</body>

</html>