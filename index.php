<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include 'references.php'; ?>

    <title>Controle de Estoque</title>

</head>

<body>

    <?php include 'siteHeader.php';?>

    <main role="main">
        <div class="container-fluid">
            <div class="row"></div>
            <div class="col-xs-6"></div>

            <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 100%; height:400px;">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="first-slide carouselImg" src="img/tiposCadastro.jpg" alt="First slide">
                        <div class="container">
                            <div class="carousel-caption carouselText">
                                <h1>Cadastro completo.</h1>
                                <p>Nosso sistema oferece suporte para o cadastro de todos os tipos de mercadoria. Clique no
                                    botão para entender melhor.</p>
                                <br>
                                <p>
                                    <a class="btn btn-lg btn-primary" href="sobre.php" role="button">Tipos de Cadastro</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="second-slide carouselImg" src="img/homeImg3.jpeg" alt="Second slide">
                        <div class="container">
                            <div class="carousel-caption carouselText">
                                <h1>Acesse em qualquer lugar!</h1>
                                <p>Com nosso sistema você pode acompanhar seu estoque aonde estiver com a versão para aparelhos
                                    móveis.</p>
                                <br>
                                <p>
                                    <a class="btn btn-lg btn-primary" href="#" role="button">Baixe o App</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="third-slide carouselImg" src="img/imagemHome.jpg" alt="Third slide">
                        <div class="container">
                            <div class="carousel-caption carouselText">
                                <h1>Já possui uma conta?</h1>
                                <p>Se você já possui uma conta clique no botão abaixo para acessar o sistema.</p>
                                <br>
                                <p>
                                    <a class="btn btn-lg btn-primary" href="login.php" role="button">Acesse o Sistema</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-6 featuresText featureTextTop">
                    <h2 class="featurette-heading">Fácil e Prático.</h2>
                    <p class="lead">Quer saber tudo o que o nosso sistema pode oferecer? Descubra a melhor forma de automatizar seu estoque.
                        <br> Clique no botão abaixo e descubra todas as funcionalidades que vão tornar o seu trabalho muito mais
                        fácil.</p>
                    <br>
                    <p>
                        <a class="btn btn-lg btn-primary" href="sobre.php" role="button">Funcionalidades</a>
                    </p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;"
                        src="img/facil.jpeg" data-holder-rendered="true">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-6 order-md-2 featureTextTop">
                    <h2 class="featurette-heading">Conheça nossos planos.</h2>
                    <p class="lead">Temos o plano que atende suas necessidades e cabe no seu orçamento!</p>
                    <br>
                    <p>
                        <a class="btn btn-lg btn-primary" href="planos.php" role="button">Planos</a>
                    </p>
                </div>
                <div class="col-md-5 featuresText order-md-1">
                    <img class="featurette-image img-fluid mx-auto img-responsive" data-src="holder.js/500x500/auto" alt="500x500" src="img/planos.jpg" data-holder-rendered="true"
                        style="width: 500px; height: 500px;">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-6 featuresText featureTextTop">
                    <h2 class="featurette-heading">Dúvidas ou Sugestões</h2>
                    <p class="lead">Está com alguma dúvida? Possui alguma sugestão? Precisa de alguma funcionalidade que nós não temos?
                        <br>Entre em contato no e-mail abaixo para falar conosco
                        <br>nossoEmail@dominio.com</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto img-responsive" data-src="holder.js/500x500/auto" alt="500x500" src="img/contato.png" data-holder-rendered="true"
                        style="width: 500px; height: 500px;">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-6 order-md-2 featureTextTop">
                    <h2 class="featurette-heading">Conheça nossa equipe.</h2>
                    <p class="lead">Quer saber mais sobre a PaBruRo? Clique no botão abaixo para saber mais sobre nossa equipe.</p>
                    <br>
                    <p>
                        <a class="btn btn-lg btn-primary" href="nossaEquipe.php" role="button">PaBruRo</a>
                    </p>
                </div>
                <div class="col-md-5 featuresText order-md-1">
                    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="img/empresa.png" data-holder-rendered="true"
                        style="width: 500px; height: 500px;">
                </div>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div>
        <!-- /.container -->
        </div>

        <!-- FOOTER -->
        <?php include 'sisFooter.php' ?>

    </main>

</body>

</html>