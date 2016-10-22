<?php
    require_once 'config.php';
?>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="msapplication-tap-highlight" content="no">


        <!--Javascript-->
        <script src="js/jquery.min.js"></script>
        <script src="js/materialize.min.js"></script>

        <!--CSS-->
        <link type="text/css" rel="stylesheet" href="css/geral.min.css" media="all">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="all">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <style>
            #btnSlide {
                display: none;
            }
        </style>
    </head>

    <nav class="green lighten-1">
        <div class="nav-wrapper">
            <a id="tituloHeader" onclick="" class="brand-logo center logo pointer"><img class="responsive-img" src="img/logo.png" /></a>

            <a href="#" data-activates="slide-out" class="button-collapse show-on-large right"><i id="btnSlide" class="mdi-navigation-menu center"></i></a>
        </div>
    </nav>

    <body class="grey lighten-4">
        <main class="container">
            <div class="row caixaConteudo white">

                <div class="col s12">
                    <div>
                        <h1>Carrinho de compras</h1>

                        <div class="col s12">
                            <ul class="collection">

                                <?php
                                if(isset($_SESSION["carrinho"])){
                                foreach($_SESSION["carrinho"] as $produto){
                            ?>
                                    <li class="collection-item avatar">
                                        <img src="<?=$produto->getImagem()?>" alt="" class="circle">
                                        <span class="title"><?=$produto->getNome()?></span>
                                        <p>R$
                                            <?=$produto->getPreco()?>
                                        </p>
                                    </li>
                                    <?php
                                }
                                    }
                            ?>
                            </ul>


                            <a class="waves-effect waves-light btn right" href="service/limpaCarrinhoService.php">Finalizar</a>
                        </div>
                    </div>
                </div>

            </div>
        </main>

        <footer>

        </footer>
    </body>

    </html>