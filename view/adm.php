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
            <div class="row mt-2">
                <div class="col s12">
                    <ul id="#" class="tabs white-text red darken-3 z-depth-1">
                        <li class="tab col s4"><a class="active white-text" href="#tabatleta">Atleta</a></li>
                        <li class="tab col s4"><a class="white-text" href="#tabevento">Evento</a></li>
                        <li class="tab col s4"><a class="white-text" href="#tabacademia">Academia</a></li>  
                    </ul>
                </div>

        <!--Tab para atleta-->
        
            <!--1--><div id="tabatleta" class="container">
            <div class="row center-align mt-2">
                <div class="col s12 m12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-title">
                                <span class="card-title"> 
                                    <h5 class="admtitle"><strong> Cadastro de Atleta </strong></h5>
                                    <h6> Insira os dados para cadastrar um atleta: </h6>
                                </span> 
                            </div> 

            <form name="" method="post" action="">
            <!--3--><div class="row">

                     <!--4--><div class="col s12 m12">
                            <!--5--><div class="input-field col s12 m8 offset-m2">
                            <input id="name" type="text" name="nome" class="validate" required> <!--Campo Nome-->
                            <label for="name"> Nome </label>
                            <span class="helper-text" data-error="Insira o nome" data-success=""></span>
                            <!--5--></div>
                     <!--4--></div>

                     <!--4--><div class="col s12 m12">
                            <!--5--><div class="input-field col s12 m8 offset-m2">
                            <input id="nasc" type="text" name="nasc" class="validate" required> <!--Campo Nascimento-->
                            <label for="nasc"> Data de Nascimento </label>
                            <span class="helper-text" data-error="Insira a data de nascimento" data-success=""></span>
                            <!--5--></div>
                     <!--4--></div>

                     <!--4--><div class="col s12 m12">
                                <div class="input-field col s12 m8 offset-m2">
                                    <select id="sexo" name="sexo" required>
                                        <optgroup label="Selecione:">            
                                            <option value="Masculino">Masculino</option>
                                            <option value="Feminino">Feminino</option>
                                            <option value="Outro">Prefiro não identificar</option>
                                        </optgroup>     
                                    </select>  
                                    <label>Sexo</label>                            
                                </div>
                     <!--4--></div>

                     <!--4--><div class="col s12 m12">
                            <!--5--><div class="input-field col s12 m8 offset-m2">
                            <input id="peso" type="text" name="peso" class="validate" required> <!--Campo Peso-->
                            <label for="peso"> Peso </label>
                            <span class="helper-text" data-error="Insira o peso" data-success=""></span>
                            <!--5--></div>
                     <!--4--></div>

                     <!--4--><div class="col s12 m12">
                            <!--5--><div class="input-field col s12 m8 offset-m2">
                            <input id="artem" type="text" name="artem" class="validate" required> <!--Campo Arte Marcial-->
                            <label for="artem"> Arte Marcial </label>
                            <span class="helper-text" data-error="Insira a arte marcial" data-success=""></span>
                            <!--5--></div>
                     <!--4--></div>

                     <!--4--><div class="col s12 m12">
                            <!--5--><div class="input-field col s12 m8 offset-m2">
                            <input id="categoria" type="text" name="categoria" class="validate" required> <!--Campo Categoria-->
                            <label for="categoria"> Categoria </label>
                            <span class="helper-text" data-error="Insira a categoria" data-success=""></span>
                            <!--5--></div>
                     <!--4--></div>

                      <!--4--><div class="col s12 m12">
                            <!--5--><div class="input-field col s12 m8 offset-m2">
                            <input id="faixa" type="text" name="faixa" class="validate" required> <!--Campo Faixa-->
                            <label for="faixa"> Faixa </label>
                            <span class="helper-text" data-error="Insira a faixa" data-success=""></span>
                            <!--5--></div>
                     <!--4--></div>

                      <!--4--><div class="col s12 m12">
                            <!--5--><div class="input-field col s12 m8 offset-m2">
                            <input id="email" type="email" name="email" class="validate" required> <!--Campo Email-->
                            <label for="email"> Email </label>
                            <span class="helper-text" data-error="Insira o email" data-success=""></span>
                            <!--5--></div>
                     <!--4--></div>

                     <!--4--><div class="col s12 m12">
                            <!--5--><div class="input-field col s12 m8 offset-m2">
                            <input id="rua" type="text" name="rua" class="validate" required> <!--Campo Rua-->
                            <label for="rua"> Rua </label>
                            <span class="helper-text" data-error="Insira a rua" data-success=""></span>
                            <!--5--></div>
                     <!--4--></div>

                     <!--4--><div class="col s12 m12">
                            <!--5--><div class="input-field col s12 m8 offset-m2">
                            <input id="n" type="text" name="n" class="validate" required> <!--Campo Número-->
                            <label for="n"> Número </label>
                            <span class="helper-text" data-error="Insira o número do endereço" data-success=""></span>
                            <!--5--></div>
                     <!--4--></div>

                      <!--4--><div class="col s12 m12">
                            <!--5--><div class="input-field col s12 m8 offset-m2">
                            <input id="bairro" type="text" name="bairro" class="validate" required> <!--Campo Bairro-->
                            <label for="bairro"> Bairro </label>
                            <span class="helper-text" data-error="Insira o bairro" data-success=""></span>
                            <!--5--></div>
                     <!--4--></div>

                      <!--4--><div class="col s12 m12">
                            <!--5--><div class="input-field col s12 m8 offset-m2">
                            <input id="cidade" type="text" name="cidade" class="validate" required> <!--Campo Cidade-->
                            <label for="cidade"> Cidade </label>
                            <span class="helper-text" data-error="Insira a cidade" data-success=""></span>
                            <!--5--></div>
                     <!--4--></div>

                     <!--4--><div class="col s12 m12">
                            <!--5--><div class="input-field col s12 m8 offset-m2">
                            <input id="estado" type="text" name="estado" class="validate" required> <!--Campo Estado-->
                            <label for="estado"> Estado </label>
                            <span class="helper-text" data-error="Insira a estado" data-success=""></span>
                            <!--5--></div>
                     <!--4--></div>

                                    <!--6--><div class="col s12 m12">
                                        <!--7--><div class="input-field col s12 m12 center-align">
                                        <button class="btn waves-effect waves-light btn-large red darken-3" type="button" id="" name="">CADASTRAR</button> <!--Botão Cadastrar--> <button class="btn waves-effect waves-light btn-large red darken-3" type="button" id="" name="">LIMPAR</button> <!--Botão limpar-->
                                    <!--7--></div>
                                <!--6--></div> 
                            </form>   
            <!--3--></div>
                    </div>
                    </div>
                    </div>
                    </div>
            <!--1--></div>
        
        <!--/Tab para atleta-->

        <!--Tab para evento-->
        
            <!--1--><div id="tabevento" class="container">
            <div class="row center-align mt-2">
                <div class="col s12 m12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-title">
                                <span class="card-title"> 
                                    <h5><strong> Cadastro de Evento </strong></h5>
                                    <h6> Insira os dados para cadastrar um evento: </h6>
                                </span>
                            </div>  

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
                    </div>
                    </div>
                    </div>
                    </div>
            <!--1--></div>
        
        <!--/Tab para evento-->

        <!--Tab para academia-->
        
            <!--1--><div id="tabacademia" class="container">
            <div class="row center-align mt-2">
                <div class="col s12 m12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-title">
                                <span class="card-title"> 
                                    <h5><strong> Cadastro de Academia</strong></h5>
                                    <h6> Insira os dados para cadastrar uma academia: </h6>  
                                </span>
                            </div>

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
                    </div>
                    </div>
                    </div>
                    </div>
            <!--1--></div>
        
        <!--/Tab para academia-->

        </main>
        

        <script type="text/javascript" src="../materialize/js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="../materialize/js/materialize.min.js"></script>

    <script>
            $(document).ready(function(){
            $('.tabs').tabs();
            });
    </script>

</body>
</html>