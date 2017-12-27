<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php
    include 'references.php';
    include 'connection.php';
    include 'logicaUsuario.php';
    ?>

        <title>Cadastre-se</title>

</head>

<body>

    <?php include 'sisHeader.php';?>

    <div class="container row" style="margin-top: 100px; margin-left: 100px;">
        <div class="container col-md-6">
            <!-- Inicio do container de INSERT -->
            <!-- ====================================================================== -->
            <form id="cadastroForm" action="insertUser.php" class="form-horizontal" role="form" method="POST">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <h2 style="text-align: center;">Cadastrar Usuario</h2>
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
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nome Completo" required autofocus>
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
                                <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com" required autofocus>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="form-group has-danger">
                            <label class="sr-only" for="username">User Name</label>
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <div class="input-group-addon" style="width: 2.6rem">
                                    <i class="fa fa-user-o"></i>
                                </div>
                                <input type="text" name="username" class="form-control" id="username" placeholder="Login" required autofocus>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <label class="sr-only" for="password">Senha</label>
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <div class="input-group-addon" style="width: 2.6rem">
                                    <i class="fa fa-key"></i>
                                </div>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Senha" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <label class="sr-only" for="password">Confirmação de Senha</label>
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <div class="input-group-addon" style="width: 2.6rem">
                                    <i class="fa fa-key"></i>
                                </div>
                                <input type="password" name="confirmPassword" class="form-control" id="confirmPassword" placeholder="Confirmação de senha">
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
        </div>
        <!-- Fim do container de INSERT -->
        <!-- ====================================================================== -->

        <!-- Inicio da tabela de usuarios -->
        <div class="container" style="margin-top: 50px;">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <h2 style="text-align: center;">Cadastrar Usuario</h2>
                    <hr>
                </div>
            </div>
            <div class="row">

                <?php
                $sql = buscaUsuario($connection);
        if($sql){

        ?>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Login</th>
                                <th>Email</th>
                                <th>Nome</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        while($show = mysqli_fetch_assoc($sql)){
                    ?>
                                <tr>
                                    <td>
                                        <?php echo $show['ID_USER']?>
                                    </td>
                                    <td>
                                        <?php echo $show['LOGIN_USER']?>
                                    </td>
                                    <td>
                                        <?php echo $show['EMAIL_USER']?>
                                    </td>
                                    <td>
                                        <?php echo $show['NAME_USER']?>
                                    </td>
                                    <td>
                                        <a href="testeUpdate.php?userId=<?=$show['ID_USER']?>" class="btn btn-warning">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="deleteUser.php?userId=<?=$show['ID_USER']?>" class="btn btn-danger">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                        }
                        ?>
                        </tbody>
                    </table>
                    <?php
            } else {
                echo "Falha ao efetuar a busca";
            }
            ?>
            </div>
        </div>
    </div>

    <script src="js/validacao.js"></script>
    <!-- <script src="js/validaUpdate.js"></script> -->

</body>

</html>