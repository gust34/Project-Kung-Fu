<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Importando Materialize CSS-->
    <link type="text/css" rel="stylesheet" href="../materialize/css/materialize.css"  media="screen,projection"/>
    <!--Importando CSS personalizado-->
    <link type="text/css" rel="stylesheet" href="../materialize/css/custom.css"  media="screen,projection"/>
    <!--Importando CSS personalizado2-->
    <link type="text/css" rel="stylesheet" href="../materialize/css/custom2.css"  media="screen,projection"/>
    <!--Importando Ícones do Google-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="../img/Logo3.ico" type="image/x-icon" />

    <title>Home</title>

</head>
<body class="config">

    <!--NavBar/Cabeçalho-->
    <header>
            <div class="navbar-fixed">

                <nav class="red darken-3 z-depth-1">

                    <div class="nav-wrapper container">
                    <a href="home.php" class="brand-logo left"> <img class="responsive-img logo" src="../img/Logo3.png"></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down ">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="ranking.php">Ranking</a></li>                        
                        <li><a href="notices.php">Notícias</a></li>
                        <li><a class="z-depth-1 waves-effect waves-light btn modal-trigger transparent" href="#modal1"><i class="large material-icons">lock</i></a>
                    </ul>

                    </div>

                </nav>
            </div>
        </header>
<!--NavBar/Cabeçalho-->

    <!--Principal-->

        <main>

        <!--<div class="carousel carousel-slider">
    <a class="carousel-item" href="#one!"><img src="../img/parallax1.jpg"></a>
    <a class="carousel-item" href="#two!"><img src="../img/parallax2.jpg"></a>
    <a class="carousel-item" href="#three!"><img src="../img/parallax3.jpg"></a>
    <a class="carousel-item" href="#four!"><img src="../img/parallax4.jpg"></a>
  </div>-->


    <!--Modal de Login--> 
          <!--1--><div id="modal1" class="modal">                     
                <!--2--><div class="modal-content">
                  <!--3--><div class="row center-align">
                  <br>
                  <br>
                    <h5><strong> Seja Bem-vindo(a)! </strong></h5>
                    <h5> Área restrita para Administrador</h5> 

                    <!--Form de login-->
                    <form name="" method="POST" action="">    
                                    <div class="row">

                                    <!--Campo email-->
                                        <div class="col s12 m12">
                                            <div class="input-field col s12 m8 offset-m2">
                                                <input placeholder="E-mail" id="user" type="email"class="validate" name="email">
                                                <span class="helper-text" data-error="Email inválido" data-success=""></span>
                                            </div>
                                        </div>

                                        <!--Campo senha-->
                                        <div class="col s12 m12">
                                            <div class="input-field col s12 m8 offset-m2">
                                                <input placeholder="Senha" id="passuser" type="password"class="validate" name="senha">
                                            </div>
                                        </div>

                                        <!--Botões: esqueci minha senha e entrar-->
                                        <div class="col s10 m12">
                                            <div class="input-field col s12 m12 center-align">
                                               <a href="adm.php"> <button class="btn waves-effect waves-light btn-large red darken-2" type="button" name="action" onclick = "validarlogin()">ENTRAR</button></a> &nbsp; &nbsp; <a href="#modal2" class="modal-trigger"> Esqueci minha senha ! </a>
                                            </div>
                                        </div>

                                        <!--Aqui vai as validações, seja php ou js-->
                                        <div class="row center-align">
                                            <div class="col s12">
                                                <h6 class="red-text" id="Retorno"> </h6> 
                                                <h6 class="red-text">
                                                    
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </form> 
                    <!--4--></div>                          
                  <!--3--> </div> 
                <!--2--></div>
          <!--1--></div>
          
          <!--Modal de esqueci minha senha-->
          <div id="modal2" class="modal bottom-sheet">                     
                <div class="modal-content">
                    <div class="row center-align">
                        <div class="row">
                            <img class="responsive-img col s2 offset-s5" src=""/>
                        </div>
                        <h4>Esqueci a senha </h4>
                    <p> Insira seu e-mail cadastrado para enviarmos sua nova senha: </p>
                    </div>
                    <div class="row">
                        <form action="#" method="#">
                            <div class="col s12 m12">
                                <div class="input-field col s12 m8 offset-m2">
                                    <input id="user" type="email"class="validate" name="email">
                                    <label for="user"> Email </label>
                                    <span class="helper-text" data-error="Email inválido" data-success=""></span>
                                </div>
                            </div>
                            <div class="col s12 m12 center-align">
                                <button class="btn waves-effect waves-light btn red darken-2" type="button" name="action" onclick="">ENVIAR</button>
                                &nbsp; <a href="#" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
                            </div>
                        </form>
                    </div> 
                </div>
            </div>
        </main>

    <!--Rodapé-->
<!--
        <footer class="page-footer red darken-3 z-depth-1">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Academia X</h5>
                <p class="grey-text text-lighten-4">Quem somos e bla bla bla.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Contate-nos</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Youtube</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Twitter</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Instagram</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2020 Copyright AthomTech
            <a class="grey-text text-lighten-4 right" href="#!">atomtech@gmail.com</a>
            </div>
          </div>
        </footer>
-->
            
    <!--Importando Materialize JS-->
    <script type="text/javascript" src="../materialize/js/jquery-1.12.1.min.js"></script>
    <script type="text/javascript" src="../materialize/js/materialize.min.js"></script>

    <script>

            $('.carousel.carousel-slider').carousel({
            fullWidth: true
            });

            $(document).ready(function(){
            $('.modal').modal();
            });

    </script>

</body>
</html>