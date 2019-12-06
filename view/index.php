<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Importando materialize-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <title>Index</title>

</head>
<body>

      <header>
            <!--Incluindo a barra de navegação--> 

      <nav class="white">
            <div class="nav-wrapper container white">
                <a href="#" class="brand-logo"> <img class="responsive-img" src=""></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"> <i class="material-icons black-text">menu</i> </a>

                <ul class="right hide-on-med-and-down">
                    <li><a href="#modal1" class="waves-effect waves-light btn red darken-2 modal-trigger">Entrar</a></li> <!--Botão entrar da navbar-->
                </ul>
                <ul id="mobile-demo" class="sidenav">
                    <li> <a href="#modal1" class="waves-effect waves-light btn red darken-2 modal-trigger">Entrar</a></li>  <!--Botão entrar mobile-->
                </ul>
            </div>
        </nav>
        </header>
        
    <div class="parallax-container">
        <div class="parallax"><img src="../img/parallax6.jpg"></div>
      </div>
      <div class="section white">
        <div class="row container">
          <h2 class="header">Quem somos?</h2>
          <p>Liga das sombras</p>
          <h2 class="header">O que queremos?</h2>
          <p>Dominação mundial</p>
          <h2 class="header">Valores?</h2>
          <p>Soldados leais</p>
        </div>
      </div>
      <div class="parallax-container">
        <div class="parallax"><img src="../img/parallax2.jpg"></div>
      </div>
      <div class="section white">
        <div class="row container">
          <h3 class="header">Contate-nos</h3>
          <p>(11)1234567899</p>

          <!--1--><div id="modal1" class="modal">                     
                <!--2--><div class="modal-content">
                  <!--3--><div class="row center-align">
                        <!--4--><div class="row">
                            <img class="responsive-img col s2 offset-s5" src=""/>
                        <!--4--></div>
                    <h5><strong> Seja Bem-vindo(a)! </strong></h5>
                    <h6> Insira seus dados para acessar o sistema</h6> 

                    <!--Form de login-->
                    <form name = "Login" method = "POST" action = "">    
                                    <div class="row">
                                        <div class="col s12 m12">
                                            <div class="input-field col s12 m8 offset-m2">

                                                <!--Campo email-->
                                                <input id="user" type="email"class="validate" name="email">
                                                <label for="user"> Email </label>
                                                <span class="helper-text" data-error="Email inválido" data-success=""></span>
                                            </div>
                                        </div>

                                        <!--Campo senha-->
                                        <div class="col s12 m12">
                                            <div class="input-field col s12 m8 offset-m2">
                                                <input id="passuser" type="password"class="validate" name="senha">
                                                <label for="passuser"> Senha </label>
                                            </div>
                                        </div>

                                        <!--Botões: esqueci minha senha e entrar-->
                                        <div class="col s12 m12">
                                            <div class="input-field col s12 m12 center-align">
                                                <button class="btn waves-effect waves-light btn-large red darken-2" type="button" name="action">ENTRAR</button> &nbsp; &nbsp; <a href="#modal2" class="modal-trigger"> Esqueci minha senha! </a>
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

       <!--Vinculando JavaScript no final da página para ganho de performance-->
       <script type="text/javascript" src="../js/jquery-1.12.1.min.js"></script>
       <script type="text/javascript" src="../js/materialize.min.js"></script>
       
       <script> 

          $(document).ready(function(){
            $('.sidenav').sidenav({
              inDuration: "300",
              outDuration: "300",
              preventScrolling: false,
              });
            }); 

          $(document).ready(function(){
            $('.parallax').parallax();
          });

          $(document).ready(function(){
                $('.modal').modal();
            });
          
       </script>        
</body>
</html>