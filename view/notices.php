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

    <title>Notícias</title>
</head>
<body>

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

<div class="carousel carousel-slider center">
    <div class="carousel-fixed-item center">
      <a class="btn waves-effect white grey-text darken-text-2">Saiba Mais</a>
    </div>
    <div class="carousel-item purple white-text" href="#one!">
      <h2>Curiosidade:</h2>
      <p class="white-text">O Kung fu também é chamado de Wushu ou Kuoshu. De acordo com o “Instituto de Kung Fu”, ela é “uma arte marcial chinesa, criada há mais de 1500 anos. Seus movimentos de ataque e defesa foram inspirados na natureza e na observação dos movimentos dos animais”. </p>
    </div>
    <div class="carousel-item amber white-text" href="#two!">
      <h2>Curiosidade:</h2>
      <p class="white-text">Não existe uma data certa para dizer quando o Kung Fu surgiu na China. Porém, estudiosos acreditam que por volta de 4 mil anos atrás, ela tenha nascido. Contudo, sabe-se que nos seus primeiros anos de vida, essa arte marcial era bastante utilizada nas guerras internas chinesas.

O registro mais confiável que existe já é de mais de 2 mil anos depois, em 1.122 a.C., quando os guerreiros da dinastia Chou da China Ocidental derrotaram o monarca da dinastia Shang utilizando a técnica chinesa.
</p>
    </div>
    <div class="carousel-item green white-text" href="#three!">
      <h2>Curiosidade:</h2>
      <p class="white-text">Inspirado nos movimentos dos animais, o Kung Fu é dividido em estilos de acordo com determinados bichos. Por exemplo, o Choy Lay Fut é baseado em movimentos de 5 animais, o tigre, pantera, garça, serpente e dragão.</p>
    </div>
    <div class="carousel-item blue white-text" href="#four!">
      <h2>Curiosidade:</h2>
      <p class="white-text">Uma das principais filosofias que envolve o Kung Fu, e que tem tudo a ver com a cultura chinesa, é a busca pela harmonia entre as coisas. Por isso, muitos utilizam o símbolo “yin e yang” para representar essa arte marcial. É a busca pelo equilíbrio perfeito que faz com que os atletas trabalhem não só o corpo, mas também a mente.</p>
    </div>
  </div>
  
        <script type="text/javascript" src="../materialize/js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="../materialize/js/materialize.min.js"></script>

    <script>
            $('.carousel.carousel-slider').carousel({
            fullWidth: true,
            indicators: true
            });
    </script>
</body>
</html>