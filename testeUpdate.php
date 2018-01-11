<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php
    include 'references.php';
    include 'connection.php';
    include 'updateUser.php';
    require_once 'class/Usuario.php';

    $nome = $_GET['userName'];
    $email = $_GET['userEmail'];
    $login = $_GET['loginUser'];
    ?>

    <title>Cadastre-se</title>

</head>

<body>

    <?php include 'sisHeader.php';?>

    <!-- Inicio do container de UPDATE -->
    <div class="container col-md-6" style="background-color: lightblue;">
        <form id="cadastroForm" action="insertUser.php" class="form-horizontal" role="form" method="POST">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <h2>Editar Usuario</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="form-group has-danger">
                        <label class="sr-only" for="name">User Name</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem">
                                <i class="fa fa-user-o"></i>
                            </div>
                            <input value="<?php echo $nome ?>" type="text" name="name" class="form-control" id="name" placeholder="Nome Completo" required autofocus>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="form-group has-danger">
                        <label class="sr-only" for="email">E-Mail Address</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem">
                                <i class="fa fa-at" aria-hidden="true"></i>
                            </div>
                            <input value="<?php echo $email ?>" type="text" name="email" class="form-control" id="email" placeholder="you@example.com" required autofocus>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="form-group has-danger">
                        <label class="sr-only" for="name">User Name</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem">
                                <i class="fa fa-user-o"></i>
                            </div>
                            <input value="<?php echo $login ?>" type="text" name="name" class="form-control" id="email" placeholder="Usuário" required autofocus>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="padding-top: 1rem">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success" id="btnUpdate" style="width: 100%;">
                        Atualizar</button>
                </div>
            </div>
        </form>
    </div>
    <!-- Fim do container de UPDATE -->
    <!-- ====================================================================== -->

    <script src="js/validacao.js"></script>
    <!-- <script src="js/validaUpdate.js"></script> -->

</body>

</html>