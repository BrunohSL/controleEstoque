<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include 'references.php';
    ?>

    <title>Cadastre-se</title>

</head>

<body>

    <?php include 'siteHeader.php';?>

    <?php
        include 'logicaUsuario.php';

        $user = new Usuario();

        $user->id = $_GET['userId'];

        $userData = buscaUsuarioId($connection, $user->id);
    ?>

    <!-- Inicio do container de UPDATE -->
    <div class="container col-md-6 marginTop">
        <form id="cadastroForm" action="updateUser.php?userId=<?=$user->id?>" class="form-horizontal" role="form" method="POST">
            <?php 

                // print_r($user);
                // die('xxx');

                $user->nome = $userData['st_nome_usu'];
                $user->email = $userData['st_email_usu'];
                $user->login = $userData['st_login_usu'];
            ?>
        <!-- Array ( 
        [ID_USUARIO] => 27 
        [LOGIN_USUARIO] => maisUmLogin 
        [SENHA_USUARIO] => 85136c79cbf9fe36bb9d05d0639c70c265c18d37 
        [EMAIL_USUARIO] => outro@emailTeste.com 
        [NOME_USUARIO] => mais um cadastro ) -->
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
                        <label for="name">User Name:</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem">
                                <i class="fa fa-user-o"></i>
                            </div>
                            <input value="<?php echo $user->nome ?>" type="text" name="name" class="form-control" id="name" placeholder="Nome Completo">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="form-group has-danger">
                        <label for="email">E-Mail Address:</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem">
                                <i class="fa fa-at" aria-hidden="true"></i>
                            </div>
                            <input value="<?php echo $user->email ?>" type="text" name="email" class="form-control" id="email" placeholder="you@example.com">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="form-group has-danger">
                        <label for="name">User Name:</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem">
                                <i class="fa fa-user-o"></i>
                            </div>
                            <input value="<?php echo $user->login ?>" type="text" name="login" class="form-control" id="login" placeholder="Usuário">
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