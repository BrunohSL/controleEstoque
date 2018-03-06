<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include 'references.php'; ?>

    <title>Cadastre-se</title>

</head>

<body>

    <?php include 'siteHeader.php';?>

    <div class="container marginTop">
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
        <!-- Fim do container de INSERT -->
        <!-- ====================================================================== -->
    </div>

    <script src="js/validacao.js"></script>
    <!-- <script src="js/validaUpdate.js"></script> -->

</body>

</html>