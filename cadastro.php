<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include 'references.php'; ?>

    <title>Cadastre-se</title>

</head>

<body>
    <header>
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
                        <a class="nav-link active" href="">Cadastre-se</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Entrar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container" style="margin-top: 100px;">
        <form id="cadastroForm" class="form-horizontal" role="form" method="POST">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h2>Dados Cadastrais</h2>
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
                                <i class="fa fa-at" aria-hidden="true"></i>
                            </div>
                            <input type="text" name="email" class="form-control" id="email" placeholder="you@example.com" required autofocus>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group has-danger">
                        <label class="sr-only" for="name">User Name</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem">
                                <i class="fa fa-user-o"></i>
                            </div>
                            <input type="text" name="name" class="form-control" id="email" placeholder="Usuário" required autofocus>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
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
                <div class="col-md-3"></div>
                <div class="col-md-6">
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

            <!-- <div class="row">
                <div id="senhaErrada" class="senhaErrada alert alert-danger col-md-3" role="alert">
                    <span class="align-middle">
                        As senhas devem ser iguais
                    </span>
                </div>
            </div> -->

            <div class="row" style="padding-top: 1rem">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success" id="btnCadastro" style="width: 100%;">
                        Cadastrar</button>
                </div>
            </div>
        </form>
    </div>

    <script src="js/validacao.js"></script>
    <script src="js/cadastro.js"></script>
    
</body>

</html>