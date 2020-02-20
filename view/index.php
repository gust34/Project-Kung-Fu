<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Importando materialize CSS-->
    <link type="text/css" rel="stylesheet" href="../materialize/css/materialize.min.css"  media="screen,projection"/>
    <!--Importando CSS personalizado-->
    <link type="text/css" rel="stylesheet" href="../materialize/css/custom.css"  media="screen,projection"/>
    <!--Importando Ícones do Google-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Importando Js das validações de campos em branco-->
    <script src="../controller/ValidarLogin.js"></script>
    
    <title>Index</title>

</head>
<body>
            <!--Barra de navegação--> 
     <!--1--><div class="navbar-fixed">

        <!--2--><nav class="yellow darken-3">
            <!--3--><div class="nav-wrapper container">

                <a href ="home.php" class="brand-logo left"> <img class="responsive-img" src="../img/yin2.ico"></a>

                <ul class="show-on-large right">
                    <li><a href="home.php" class="waves-effect waves-light btn red darken-2">Entrar</a></li> 
                </ul>
            <!--3--></div>
        <!--2--></nav>
     <!--1--></div>

        <!--Página utilizando Parallax para desktop--> 
        <div class="hide-on-med-and-down">
                <div class="parallax-container">
                    <div class="parallax"><img src="../img/parallax6.jpg"></div>
                </div>
                <div class="section white">
                    <div class="row container">
                    <h3 class="header">Quem somos?</h3>
                    <p>Liga das sombras</p>
                    <h3 class="header">O que queremos?</h3>
                    <p>Dominação mundial</p>
                    <h3 class="header">Valores?</h3>
                    <p>Soldados leais</p>
                    </div>
                </div>

                <div class="parallax-container">
                    <div class="parallax "><img src="../img/parallax2.jpg"></div>
                </div>
                <div class="section white">
                    <div class="row container">
                    <h3 class="header">Contate-nos</h3>
                    <p>(11)1234567899</p>
                    <h3 class="header">Dedicatótria</h3>
                    <p>Feito em homenagem a pipipi popopo</p>

       <!--Importando Materialize Js-->
       <script type="text/javascript" src="../materialize/js/jquery-1.12.1.min.js"></script>
       <script type="text/javascript" src="../materialize/js/materialize.min.js"></script>
       
       <script> 

          $(document).ready(function(){
            $('.parallax').parallax();
            });
       </script>        
</body>
</html>