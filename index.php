<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <?php include 'references.php'; ?>

        <title>Controle de Estoque</title>
    
    </head>
    <body>
                <header>
                    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                        <a class="navbar-brand" style="text-color: white;">Logo do sistema</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <ul class="navbar-nav ml-auto" id="teste">
                            <li class="nav-item active">
                                <a class="nav-link active" href="">Home <span class="sr-only"></span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="cadastro.html">Cadastre-se</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.phtml">Entrar</a>
                            </li>
                            </ul>
                        </div>
                    </nav>
                </header>
            
                <main role="main">
            <div class="row"></div>
            <div class="col-xs-6"></div>
            
                    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 800; height:400px; margin: 0 auto">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="first-slide" src="img/homeImg0.jpeg" alt="First slide">
                            <div class="container">
                                <div class="carousel-caption carouselText">
                                    <h1>Cadastro completo.</h1><br><br><br>
                                    <p>Nosso sistema oferece suporte para o cadastro de todos os tipos de mercadoria. Clique no botão para entender melhor.</p><br>
                                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Tipos de Cadastro</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                        <img class="second-slide" src="img/homeImg3.jpeg" alt="Second slide">
                            <div class="container">
                                <div class="carousel-caption carouselText">
                                    <h1>Acesse em qualquer lugar!</h1><br><br><br>
                                    <p>Com nosso sistema você pode acompanhar seu estoque aonde estiver com a versão para aparelhos móveis.</p><br>
                                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Baixe o App</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="third-slide" src="img/homeImg2.jpeg" alt="Third slide">
                            <div class="container">
                                <div class="carousel-caption carouselText">
                                    <h1>Já possui uma conta?</h1><br><br><br>
                                    <p>Se você já possui uma conta clique no botão abaixo para acessar o sistema.</p><br>
                                    <p><a class="btn btn-lg btn-primary" href="login.phtml" role="button">Acesse o Sistema</a></p>
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
                </div>
            </div>
            
                    <!-- START THE FEATURETTES -->
            
                    <hr class="featurette-divider">
            
                    <div class="row featurette">
                        <div class="col-md-7">
                            <h2 class="featurette-heading">Fácil e Prático.</h2>
                            <p class="lead">Quer saber tudo o que o nosso sistema pode oferecer? Descubra a melhor forma de automatizar seu estoque.
                            <br>
                            Clique no botão abaixo e descubra todas as funcionalidades que vão tornar o seu trabalho muito mais fácil.</p>
                            <br>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Funcionalidades</a></p>
                        </div>
                        <div class="col-md-5">
                            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="img/homeImg1.jpg" data-holder-rendered="true">
                        </div>
                    </div>
            
                    <hr class="featurette-divider">
            
                    <div class="row featurette">
                        <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading">Conheça nossos planos.</h2>
                        <p class="lead">Temos o plano que atende suas necessidades e cabe no seu orçamento!</p>
                        <br>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Planos</a></p>
                        </div>
                        <div class="col-md-5 order-md-1">
                        <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="img/homeImg3.jpeg" data-holder-rendered="true" style="width: 500px; height: 500px;">
                        </div>
                    </div>
            
                    <hr class="featurette-divider">
            
                    <div class="row featurette">
                        <div class="col-md-7">
                        <h2 class="featurette-heading">Dúvidas ou Sugestões</h2>
                        <p class="lead">Está com alguma dúvida? Possui alguma sugestão? Precisa de alguma funcionalidade que nós não temos?
                            <br>Entre em contato no e-mail abaixo para falar conosco
                            <br>nossoEmail@dominio.com</p>
                        </div>
                        <div class="col-md-5">
                        <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="img/homeImg2.jpeg" data-holder-rendered="true" style="width: 500px; height: 500px;">
                        </div>
                    </div>

                    <hr class="featurette-divider">
            
                    <div class="row featurette">
                        <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading">Conheça nossa equipe.</h2>
                        <p class="lead">Quer saber mais sobre a PaBruRo? Clique no botão abaixo para saber mais sobre nossa equipe.</p>
                        <br>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">PaBruRo</a></p>    
                    </div>
                        <div class="col-md-5 order-md-1">
                        <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="img/homeImg3.jpeg" data-holder-rendered="true" style="width: 500px; height: 500px;">
                        </div>
                    </div>
            
                    <hr class="featurette-divider">
            
                    <!-- /END THE FEATURETTES -->
            
                    </div><!-- /.container -->
            
            
                    <!-- FOOTER -->
                    <footer class="container">
                    <p class="float-right"><a href="#">Back to top</a></p>
                    <p>© 2017 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
                    </footer>
            
                </main>
            
            
                
                
            
            <div id="lo-engage-ext-container">
                <div data-reactroot=""></div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" viewBox="0 0 500 500" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;">
                <defs>
                    <style type="text/css"></style>
                </defs>
                <text x="0" y="25" style="font-weight:bold;font-size:25pt;font-family:Arial, Helvetica, Open Sans, sans-serif">500x500</text>
            </svg>
            <link rel="stylesheet" type="text/css" href="chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/css/content.css">
    </body>
</html>