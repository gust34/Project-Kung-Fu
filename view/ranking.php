<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Importando Materialize CSS-->
     <link type="text/css" rel="stylesheet" href="../materialize/css/materialize.min.css"  media="screen,projection"/>
    <!--Importando CSS personalizado-->
    <link type="text/css" rel="stylesheet" href="../materialize/css/custom2.css"  media="screen,projection"/>
    <!--Importando Ícones do Google-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <title>Ranking</title>
</head>

<body class="config">
<!--NavBar/Cabeçalho-->
<header>
            <div class="navbar-fixed">

                <nav class="red darken-3 z-depth-1">

                    <div class="nav-wrapper container">
                    <a href="home.php" class="brand-logo left"> <img class="responsive-img" src="../img/yin3.ico"></a>
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

   <!--Ranking-->

    <!--Ranking título-->
            <!--Pai--><div class="posranking">
                            <!--1--><div class="titlerank"> 
                                   <h4 class="h4"><center> Ranking Geral <center></h4>
                                <!--1--></div>


                        <!--2--><div class="row"> 
                                <!--3--> <div class="col s8 offset-s2 grey lighten-1 z-depth-3">
                                            <table class="centered striped">
                                                <thead>
                                                <tr>
                                                    <th>Nome</th>
                                                    <th>Escola</th>
                                                    <th>Pontuação</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                <tr>
                                                    <td>Juh</td>
                                                    <td>Nárnia</td>
                                                    <td>1000 pontos</td>
                                                </tr>
                                                <tr>
                                                    <td>Guh</td>
                                                    <td>StarLabs</td>
                                                    <td>4500 pontos</td>
                                                </tr>
                                                <tr>
                                                    <td>Sid</td>
                                                    <td>Gotham</td>
                                                    <td>700 pontos</td>
                                                </tr>
                                                <tr>
                                                    <td>Bat</td>
                                                    <td>Osasco</td>
                                                    <td>7800 pontos</td>
                                                </tr>
                                                <tr>
                                                    <td>flash</td>
                                                    <td>Cidade central</td>
                                                    <td>703345 pontos</td>
                                                </tr>
                                                <tr>
                                                    <td>lanterna</td>
                                                    <td>barueri</td>
                                                    <td>7067 pontos</td>
                                                </tr>
                                                <tr>
                                                    <td>Coronga</td>
                                                    <td>China</td>
                                                    <td>706467 pontos</td>
                                                </tr>
                                                <tr>
                                                    <td>Elefante</td>
                                                    <td>Rio de Janeiro</td>
                                                    <td>7023267 pontos</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                    <!--2--></div>
                                <!--1--></div>
            <!--Pai--></div>
</body>
</html>