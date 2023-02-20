<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>barbearia</title>

    <!-- ícone da aba -->
    <link rel="icon" href="../../img/logo.jpg">

    

    <!-- Full calendar -->
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.4/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.4/index.global.min.js'></script>
    <script src="<?php echo DIRPAGE.'lib/js/FullCalendar/index.global.js'; ?>"></script>
    <script src="<?php echo DIRPAGE.'lib/js/FullCalendar/index.global.min.js'; ?>"></script>
    <script src="<?php echo DIRPAGE.'lib/js/FullCalendar/locales/pt-br.global.js'; ?>"></script>

    <!-- Estilos -->
    <link rel="stylesheet" type="text/css" href="<?php echo DIRPAGE.'lib/css/style.css'; ?>">
    <!--GOOGLE ICONS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--FONT AWESOME -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">

    <!-- MATERIALIZE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


    <!-- MENU MOBILE -->

    <ul class="sidenav light" id="menu-mobile">
    <li><a href="<?php echo DIRPAGE.'index.php' ;?>" style="color:skyblue">Home</a></li>
    <li><a href="<?php echo DIRPAGE.'contato.php' ;?>">Contato e Informações</a></li>
    <li><a href="<?php echo DIRPAGE.'servicos.php' ;?>">Serviços</a></li>
    <li><a href="<?php echo DIRPAGE.'views/manager/index.php' ;?>" style="color:darksalmon;">Gerenciamento</a></li>
    <?php 
    if(!isset($_SESSION)) {session_start();}
    if(isset($_SESSION['id'])): {?> 
    <li><a href="<?php echo DIRPAGE.'class/funcionario/logout.php' ;?>">Sair</a></li><?php } endif; ?>
    </ul>

    </ul>

    <!-- BARRA DE NAVEGAÇÃO -->

    <div class="navbar-fixed">
    <nav class="navbar blue-grey lighten-1">
    <div class="nav-wrapper container">
    <h1 class="logo_text">Agende seu horário!</h1>

    <a href="#"><img class= "logo_img" src="<?php echo DIRPAGE.'img/logo.jpg' ;?>" alt="lightdev" data-ll-status="loaded"></a>
    <ul class="right light hide-on-med-and-down ">
    <li><a href="<?php echo DIRPAGE.'index.php' ;?>" style="color:skyblue">Home</a></li>
    <li><a href="<?php echo DIRPAGE.'contato.php' ;?>">Contato e Informações</a></li>
    <li><a href="<?php echo DIRPAGE.'servicos.php' ;?>">Serviços</a></li>
    <li><a href="<?php echo DIRPAGE.'views/manager/index.php' ;?>" style="color:darksalmon;">Gerenciamento</a></li>
    <?php 
    if(!isset($_SESSION)) {session_start();}
    if(isset($_SESSION['id'])): {?> 
    <li><a href="<?php echo DIRPAGE.'controllers/controllerLogout.php' ;?>" style="color:white;">Sair</a></li><?php } endif; ?>
    </ul>

    <a href="#" data-target="menu-mobile" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
    </div>
    </nav> 
    </div>

</head>
<body>