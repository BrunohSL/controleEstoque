<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include 'references.php'; ?>

    <title>Controle de Estoque</title>

</head>

<body>

    <?php include 'siteHeader.php';?>

    <div class="container marginTop">
        <form class="form-horizontal" role="form" method="POST" action="validaLogin.php">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h2>Please Login</h2>
                    <!-- Para validar o login pegar o e-mail de login, criptografa a senha digitada e faz um select no banco com essas informações.
                         se retornar true conecta se não fala que a senha e login estão errados -->
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group has-danger">
                        <label class="sr-only" for="email">E-Mail Address</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem">
                                <i class="fa fa-user-o"></i>
                            </div>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Usuário" required autofocus>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <i class="fa fa-close"></i> Example error message
                        </span>
                    </div>
                </div> -->
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="sr-only" for="password">Password</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem">
                                <i class="fa fa-key"></i>
                            </div>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Senha" required>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            Wrong passworld
                        </span>
                    </div>
                </div> -->
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6" style="padding-top: .35rem">
                    <div class="form-check mb-2 mr-sm-2 mb-sm-0">
                        <label class="form-check-label">
                            <input class="form-check-input" name="remember" type="checkbox">
                            <span style="padding-bottom: .15rem">Remember me</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 1rem">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <button id="btnLogin" type="submit" class="btn btn-success">
                        <i class="fa fa-sign-in"></i> Login</button>
                    <a class="btn btn-link" href="/password/reset">Forgot Your Password?</a>
                </div>
            </div>

                <?php
                // $teste = $_GET["login"];
                //     var_dump($teste);
                //     die('xxx');
                    if($_GET['login'] == 1){
                    ?>
                    <div class="container row">
                    <div class="col-md-3"></div>
                    <div class="alert alert-danger col-md-6" style="margin-top: 20px;">Login ou senha inválido</div>
                    </div>
                    <?php
                    }
                ?>
        </form>
    </div>

</body>

</html>