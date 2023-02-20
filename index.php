<?php include("config/config.php"); ?>
<?php include(DIRREQ."lib/html/header.php"); ?>



<!-- HOME -->
<section class="bloco-home scrollspy" id="home">

    <div class="row center">
    <!--<img src="img/logo.jpg" class="home_img img-responsive" alt="Responsive image">-->
    <br><br><br><h3 style="color:white" class="pt-3">Seja bem vindo.</h3>

    </div>
    <div class="row center">
    <a href="<?php echo DIRPAGE.'views/user'; ?>" class="btn waves-effect waves-light btn-large white-text blue-grey darken-1 "> Reservar um Horário</a><br>
    </div>
    <div class="row center">
    <a href="#comofunciona" class="btn btn-small green white-text">Como funciona?</a>
    </div>

</section>

<!-- COMO FUNCIONA -->
<section class="bloco-cf scrollspy" id="comofunciona">

    <div class="row center">
    <h5 class="light white-text">Entenda como funciona nosso sistema</h5>
    <div class="">
    <div class="card blue-grey darken-3">
    <div class="card-content white-text">
    <span class="card-title">Usuário</span>
    <p>Passo 1: Clique em "Reservar um Horário";</p>
    <p>Passo 2: Escolha data e horário desejados;</p>
    <p>Passo 3: Insira suas informações;</p>
    <p>Passo 4: Pronto! Você receberá um e-mail com as informações do seu agendamento.</p>                 
    </div>
    <div class="card-action">
    <a href="<?php echo DIRPAGE.'views/user'; ?>">Reservar um horário</a>
    </div>
    </div>
    <div class="card blue-grey darken-3">
    <div class="card-content white-text">
    <span class="card-title">Gerente</span>
    <p>Passo 1: Clique em "Gerenciamento";</p>
    <p>Passo 2: Faça Login no Site;</p>
    <p>Passo 3: Manipule os agendamentos e informações dos clientes;</p>                 
    </div>
    <div class="card-action">
    <a href="<?php echo DIRPAGE.'views/manager'; ?>">Gerenciamento</a>
    </div>
    </div>
    </div>        
    </div>

</section>



<?php include(DIRREQ."lib/html/footer.php"); ?>


