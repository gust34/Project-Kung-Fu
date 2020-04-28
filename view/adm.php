<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Importando Materialize CSS-->
    <link type="text/css" rel="stylesheet" href="../materialize/css/materialize.css"  media="screen,projection"/>
    <!--Importando CSS personalizado-->
    <link type="text/css" rel="stylesheet" href="../materialize/css/custom.css"  media="screen,projection"/>
    <!--Importando CSS personalizado2-->
    <link type="text/css" rel="stylesheet" href="../materialize/css/custom2.css"  media="screen,projection"/>
    <!--Importando Ícones do Google-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="../img/Logo3.ico" type="image/x-icon" />
    <title>Área Restrita</title>
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

        <main>
        

        <!--Botões lado esquerdo-->
        <div class="row">
            <div class="main col s3 m3">
                <div class="card grey lighten-3">
                    <div class="card-content center">
                        <span class="card-title">Administração</span>
                        <p>Escola uma das opções a seguir</p>
                    </div>
                    <div class="card-action btnset">
                        <div class="row"><a href="#modalatleta" class="col s10 waves-effect waves-light btn-large modal-trigger red darken-3 z-depth-1"><i class="material-icons left">person_add</i>Atleta</a></div>
                        <div class="row"><a href="#modalevento" class="col s10 waves-effect waves-light btn-large modal-trigger red darken-3 z-depth-1"><i class="material-icons left">place</i>Evento</a></div>
                        <div class="row"><a href="#modalacademia"class="col s10 waves-effect waves-light btn-large modal-trigger red darken-3 z-depth-1"><i class="material-icons left">apartment</i>Academia</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!--Botões lado esquerdo-->

        <!--Modal para atleta-->
        
            <!--1--><div id="modalatleta" class="modal modal-fixed-footer">
            <!--2--><div class="modal-content">
                <center>
            <h5><strong> Cadastro de Atleta </strong></h5>
            <h6> Insira os dados para cadastrar um atleta: </h6>  
             </center>

            <form name="" method="post" action="">
            <!--3--><div class="row">

                     <!--4--><div class="col s12 m12">
                            <!--5--><div class="input-field col s12 m8 offset-m2">
                            <input id="name" type="text" name="nome" class="validate" required> <!--Campo Nome-->
                            <label for="name"> Nome </label>
                            <span class="helper-text" data-error="Insira seu nome" data-success=""></span>
                            <!--5--></div>
                     <!--4--></div>

                      <!--4.2--><div class="col s12 m12">
                            <!--5.2--><div class="input-field col s12 m8 offset-m2">
                            <input id="nascimento" type="text" name="nascimento" class="validate" required> <!--Campo Nascimento-->
                            <label for="nascimento"> Nascimento </label>
                            <span class="helper-text" data-error="Insira o nascimento" data-success=""></span>
                            <!--5.2--></div>
                     <!--4.2--></div>

                      <!--4.3--><div class="col s12 m12">
                            <!--5.3--><div class="input-field col s12 m8 offset-m2">
                            <input id="sexo" type="text" name="sexo" class="validate" required> <!--Campo Sexo-->
                            <label for="sexo"> Sexo </label>
                            <span class="helper-text" data-error="Insira o sexo" data-success=""></span>
                            <!--5.3--></div>
                     <!--4.3--></div>

                                    <!--6--><div class="col s12 m12">
                                        <!--7--><div class="input-field col s12 m12 center-align">
                                        <button class="btn waves-effect waves-light btn-large red darken-3" type="button" id="" name="">CADASTRAR</button> <!--Botão Cadastrar--> <button class="btn waves-effect waves-light btn-large red darken-3" type="button" id="" name="">LIMPAR</button> <!--Botão limpar-->
                                    <!--7--></div>
                                <!--6--></div> 
                            </form>   
            <!--3--></div>
            <!--2--></div>
            <!--8--><div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
            <!--8--></div>
            <!--1--></div>
        
        <!--Modal para atleta-->

        <!--Modal para evento-->
        
            <!--1--><div id="modalevento" class="modal modal-fixed-footer">
            <!--2--><div class="modal-content">
            <center>
            <h5><strong> Cadastro de Evento </strong></h5>
            <h6> Insira os dados para cadastrar um evento: </h6>  
            </center>

            <form name="" method="post" action="">
            <!--3--><div class="row">

                     <!--4--><div class="col s12 m12">
                            <!--5--><div class="input-field col s12 m8 offset-m2">
                            <input id="name" type="text" name="nome" class="validate" required> <!--Campo Nome-->
                            <label for="name"> Nome </label>
                            <span class="helper-text" data-error="Insira seu nome" data-success=""></span>
                            <!--5--></div>
                     <!--4--></div>

                      <!--4.2--><div class="col s12 m12">
                            <!--5.2--><div class="input-field col s12 m8 offset-m2">
                            <input id="local" type="text" name="local" class="validate" required> <!--Campo Local-->
                            <label for="local"> Local </label>
                            <span class="helper-text" data-error="Insira o local" data-success=""></span>
                            <!--5.2--></div>
                     <!--4.2--></div>

                      <!--4.3--><div class="col s12 m12">
                            <!--5.3--><div class="input-field col s12 m8 offset-m2">
                            <input id="quando" type="text" name="quando" class="validate" required> <!--Campo Quando-->
                            <label for="quando"> Quando </label>
                            <span class="helper-text" data-error="Insira quando" data-success=""></span>
                            <!--5.3--></div>
                     <!--4.3--></div>

                                    <!--6--><div class="col s12 m12">
                                        <!--7--><div class="input-field col s12 m12 center-align">
                                        <button class="btn waves-effect waves-light btn-large red darken-3" type="button" id="" name="">CADASTRAR</button> <!--Botão Cadastrar--> <button class="btn waves-effect waves-light btn-large red darken-3" type="button" id="" name="">LIMPAR</button> <!--Botão limpar-->
                                    <!--7--></div>
                                <!--6--></div> 
                            </form>   
            <!--3--></div>
            <!--2--></div>
            <!--8--><div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
            <!--8--></div>
            <!--1--></div>
        
        <!--Modal para evento-->

        <!--Modal para academia-->
        
            <!--1--><div id="modalacademia" class="modal modal-fixed-footer">
            <!--2--><div class="modal-content">
            <center>
            <h5><strong> Cadastro de Academia</strong></h5>
            <h6> Insira os dados para cadastrar uma academia: </h6>  
            </center>

            <form name="" method="post" action="">
            <!--3--><div class="row">

                     <!--4--><div class="col s12 m12">
                            <!--5--><div class="input-field col s12 m8 offset-m2">
                            <input id="name" type="text" name="nome" class="validate" required> <!--Campo Nome-->
                            <label for="name"> Nome </label>
                            <span class="helper-text" data-error="Insira seu nome" data-success=""></span>
                            <!--5--></div>
                     <!--4--></div>

                      <!--4.2--><div class="col s12 m12">
                            <!--5.2--><div class="input-field col s12 m8 offset-m2">
                            <input id="local" type="text" name="local" class="validate" required> <!--Campo Local-->
                            <label for="local"> Local </label>
                            <span class="helper-text" data-error="Insira o local" data-success=""></span>
                            <!--5.2--></div>
                     <!--4.2--></div>

                      <!--4.3--><div class="col s12 m12">
                            <!--5.3--><div class="input-field col s12 m8 offset-m2">
                            <input id="estilo" type="text" name="estilo" class="validate" required> <!--Campo Quando-->
                            <label for="estilo"> Estilo de luta </label>
                            <span class="helper-text" data-error="Insira o estilo" data-success=""></span>
                            <!--5.3--></div>
                     <!--4.3--></div>

                                    <!--6--><div class="col s12 m12">
                                        <!--7--><div class="input-field col s12 m12 center-align">
                                        <button class="btn waves-effect waves-light btn-large red darken-3" type="button" id="" name="">CADASTRAR</button> <!--Botão Cadastrar--> <button class="btn waves-effect waves-light btn-large red darken-3" type="button" id="" name="">LIMPAR</button> <!--Botão limpar-->
                                    <!--7--></div>
                                <!--6--></div> 
                            </form>   
            <!--3--></div>
            <!--2--></div>
            <!--8--><div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
            <!--8--></div>
            <!--1--></div>
        
        <!--Modal para academia-->

        </main>
        

        <script type="text/javascript" src="../materialize/js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="../materialize/js/materialize.min.js"></script>

    <script>
            $(document).ready(function(){
              $('.modal').modal();
            });
    </script>

</body>
</html>