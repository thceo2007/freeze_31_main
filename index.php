<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Frozen Sorvetes</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="css/estiloformularios.css" type="text/css" />
        <link rel="stylesheet" type="text/css" href="css/mobile.css" />
        <script src="js/mobile.js" type="text/javascript"></script>

        <script src="mascaras.js" type="text/javascript"></script>


        <!-- Bootstrap -->
        <link href="css_bootstrap/bootstrap.min.css" rel="stylesheet" />

        <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
        <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"/></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->


        <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
        <script src="js_bootstrap/bootstrap.min.js"></script>
    </head>
    <body>

        <form method="post">

            <!-- CABEÇALHO -->
            <?php include 'header.php' ?>

            
            <!-- CORPO DO INDEX -->
            <div id="body" class="home">

                <!-- CORPO -->
                <div class="body">
                    <div>
                        <div>
                            <h1>NOVO PRODUTO</h1>
                            <h2>Framboesa flambada com creme</h2>
                            <p>A combinação de framboesas flambadas com um delicioso sorvete de creme de baunilha é simplesmente indescritível. </p>
                        </div>

                        <img src="images/yogurt.jpg" alt="" />
                    </div>
                </div>

                <!-- RODAPÉ DO CORPO -->
                <div class="footer">
                    <div>
                        <ul>
                            <li>
                                <a href="#" class="product"></a>
                                <h1>PRODUTOS</h1>
                            </li>
                            <li>
                                <a href="#" class="about"></a>
                                <h1>NOSSA HISTÓRIA</h1>
                            </li>
                            <li>
                                <a href="#" class="flavor"></a>
                                <h1>SABORES</h1>
                            </li>
                            <li>
                                <a href="#" class="contact"></a>
                                <h1>LOCALIZAÇÃO</h1>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>



            <!-- RODAPÉ -->
            <?php include 'footer.php' ?>    

        </form>
    </body>
</html>
