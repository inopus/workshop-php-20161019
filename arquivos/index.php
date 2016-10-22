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
        <?php
            if(isset($_GET["return"]) && $_GET["return"] == "true"){
         ?>
            <script>
                alert('Incluído com sucesso!!');
            </script>
            <?php
            }
        ?>

                <?php
            if(isset($_GET["returnLimpaCarrinho"]) && $_GET["returnLimpaCarrinho"] == "true"){
         ?>
                    <script>
                        alert('Incluído com sucesso!!');
                    </script>
                    <?php
            }
        ?>
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

                <div class="col s12 center-align">
                    <div>
                        <h1>Produtos em destaque</h1>
                        <?php
                            $produtosDAO = new ProdutosDAO();
                        
                            foreach ($produtosDAO->listaProdutos() as $produto){      
                        
                        ?>
                            <div class="col s4 center-align">
                                <div class="card produto">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <img class="activator imgProduto" src="<?=$produto->getImagem()?>">
                                    </div>
                                    <div class="card-content">
                                        <span class="card-title activator grey-text text-darken-4"><?=$produto->getNome()?><i class="material-icons right">more_vert</i></span>
                                        <p>R$ <strong><?=$produto->getPreco()?></strong></p>
                                        <a href="service/carrinhoService.php?id=<?=$produto->getId()?>">+ CARRINHO</a>
                                    </div>
                                    <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4"><?=$produto->getNome()?><i class="material-icons right">close</i></span>
                                        <p>Informações do produto:</p>
                                        <p><span>Estoque: </span>
                                            <?=$produto->getQtdEstoque()?><span> unidades</span></p>
                                        <p><span>Preço: R$</span>
                                            <?=$produto->getPreco()?>
                                        </p>
                                        <p><span>Categoria: </span>
                                            <?=$produto->getCategoria()?>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <?php
                            }
                            ?>
                    </div>
                </div>

            </div>
        </main>
        <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
            <a class="btn-floating btn-large green" href="carrinho.php">
                <i class="large material-icons">shopping_cart</i>
            </a>
        </div>

    </body>
    <script>
        function addCarrinho() {
            alert('oi');
        }
    </script>


    </html>