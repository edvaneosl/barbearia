<?php include("../../config/config.php"); ?>
<?php include(DIRREQ."lib/html/header.php"); ?>
<?php $date=new \DateTime($_GET['date'],new \DateTimeZone('America/Sao_Paulo')); ?>


<section class="bloco scrollspy" id="adicionar"> <!--seção-->
<div class="container"><!--container-->

<div class="row center"> <!--titulo-->
<h5 class="black-text">Reservar Horário</h5>
</div> <!--titulo-->


<form name="formAdd" id="formAdd" method="post" 
action="<?php echo DIRPAGE.'controllers/ControllerAdd.php'; ?>"> <!--form-->
    <div class="row form"><!--div form-->
    <div class="input-field col s12">
    <i class="material-icons prefix">face</i>
    <input class="validate field" type="text" name="nome" id="nome" placeholder="Ex.João" required>
    <label for="nome">Insira seu nome</label>
    </div>
    <div class="input-field col s12">
    <i class="material-icons prefix">phone</i>
    <input class="validate field" type="text" name="telefone" id="telefone" placeholder="Ex.62 99999-9999" required>
    <label data-error="Telefone inválido" data-success="Telefone válido" for="telefone">Insira seu telefone</label>
    </div>
    <div class="input-field col s12">
    <i class="material-icons prefix">email</i>
    <input class="validate field" type="email" name="email" id="email" placeholder="Ex.joaodasilva@gmail.com" required>
    <label data-error="E-mail inválido" data-success="E-mail válido" for="email">Seu e-mail?</label>
    </div>
    <div class="input-field col s12">
    <i class="material-icons prefix">event</i>
    <input class=" validate field" type="date" name="date" id="date" value="<?php echo $date->format("Y-m-d"); ?>" readonly>
    <label data-error="Data inválida" data-success="Data válida" for="data" >Data</label>
    </div>
    <div class="input-field col s12">
    <i class="material-icons prefix">scheduler</i>
    <input class= "validate field" type="time" name="hora" id="hora" placeholder="" value="<?php echo $date->format("H:i"); ?>" readonly>
    <label data-error="Serviço inválido" data-success="Serviço válido" for="data">Horário</label>
    </div>
    <div class="input-field col s12">
    <i class="material-icons prefix">list</i>
    <select class="validate field" type="text" name="servico" id="servico" placeholder="Ex.Cabelo" required>
      <option value="Cabelo Tesoura">Cabelo Tesoura</option>
      <option value="Cabelo Máquina">Cabelo Máquina</option>
      <option value="Cabelo e Barba">Cabelo e Barba</option>
      <option value="Barba">Barba</option>
      <option value="Sobrancelha">Sobrancelha</option>
    </select>
    <label data-error="Serviço inválido" data-success="Serviço válido" for="data">Serviço</label>
    </div><br>

    <div class="row center">
    <button style="color:darkblue" href="#reservas" class=" btn btn-primary blue-grey darken-1 center" type="submit" name="btn-cad-man">Cadastrar reserva</button>
    <a style="" href="index.php" class=" btn btn-primary blue center" type="" name="">Voltar</a>
    </div>


    </div> <!--div form-->
</form> <!--form-->
</div><!--container-->
</section><!--seção-->

<?php include(DIRREQ."lib/html/footer.php"); ?>