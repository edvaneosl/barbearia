<?php include("../../config/config.php"); ?>
<?php include(DIRREQ."lib/html/header.php"); 
$objEvents=new \Classes\ClassEvents();
?>

<?php
if(!isset($_SESSION)) {session_start();}

if(!isset($_SESSION['id'])) {
header('Location: login.php');
}
?>

<!-- Título -->

<!-- Tabs -->

<section id="tab" class="bloco-manager scrollspy white">
<div class="center blue-grey darken-1 white-text" ><p>Gerenciamento - Área Restrita</p></div>

<div class="row">
<div class="col s12">
<ul class="tabs blue-grey lighten-4">
<li class="tab col s6 m3 l3" ><a class="white-text" href="#agenda">Reservas</a></li>
<li class="tab col s6 m3 l3"><a class="white-text" href="#lista">Lista</a></li>
<li class="tab col s6 m3 l3"><a class="white-text"  href="#configuracoes">Configurações</a></li>
<li class="tab col s6 m3 l3"><a class="white-text" href="../../controllers/ControllerLogout.php" target="_self">Sair</a></li>
</ul>
</div>
<div id="agenda" class="col s12"> <!--id agenda-->
<div class="calendarManager"></div>
</div>
<div id="lista" class="col s12">
<!-- Lista de Agendamento -->
<div class="row">
<div class="center blue-grey darken-1"><p>Lista - Área Restrita</p></div>

<table class="striped highlight centered">
<thead>
<tr>
<th>Reserva</th>
<th>Nome</th>
<th>Telefone</th>
<th>Horário</th>
<th>Serviço</th>
</tr>
</thead>

<tbody>
<!-- Loop-->
<?php

$consulta=new \Classes\ClassEvents();
$BFetch = $consulta->readEvents(array());

while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)) {
?>

<tr>
<td><?php echo $Fetch['id']; ?></td>
<td><?php echo $Fetch['nome']; ?></td>
<td><?php echo $Fetch['telefone']; ?></td>
<td><?php echo date("H:i d/m/Y", strtotime($Fetch['start'])); ?></td>
<td><?php echo $Fetch['servico']; ?></td>
<td><a id="deletar" href="#modalDeletar" class="modal-trigger right white-text" name="btn-deletar" type="submit"><i class="material-icons" style="color:red">delete</i></a></td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</div><!--id lista-->

<div id="configuracoes" class="col s12">
<div class="row">
<div class="center">
<div class="col s12 m6 l6">
<div class="blue-grey darken-1"><p>Configurar Calendário</p></div>

<div style="background-color:ghostwhite"> <!-- desabilitar dias -->
<p>Desabilitar dia</p>
<form method="POST" action="<?php echo DIRPAGE.'controllers/ControllerAdd.php';?>">
<input class=" validate field" type="date" name="date" id="date" value="" style="width:50%"required>
<button style="color:ghostwhite;" href="#" class="btn-off-dia btn-small center" type="submit" name="btn-off-dia">Confirmar</button>
</form>                             
</div> <!-- desabilitar dias -->

<div style="background-color:ghostwhite"><!-- desabilitar semana -->
<p>Desabilitar Semana</p>
<form method="POST" action="<?php echo DIRPAGE.'class/reservas/create.php';?>">
<label >Início</label>
<input disabled class=" validate field" type="date" name="date" id="date" placeholder="inicio" value=""  style="width:20%" required>
<label >Fim</label>
<input disabled class=" validate field" type="date" name="date" id="end" value="" placeholder="fim" style="width:20%" required>
<button style="color:ghostwhite;" href="#" class="btn-off-per btn-small center" type="submit" name="btn-off-per" onclick="M.toast({html: 'Em construção!'})">Confirmar</button>
</form>                                 
</div><!-- desabilitar semana -->

<div style="background-color:ghostwhite"><!-- intervalo atendimento -->
<p>Escolher intervalo de atendimento</p>
<form>
<label >Início</label>
<input disabled class=" validate field" type="time" name="time" id="start" placeholder="inicio" value=""  style="width:20%" required>
<label >Fim</label>
<input disabled class=" validate field" type="time" name="time" id="end" value="" placeholder="fim" style="width:20%" required>
<button style="color:ghostwhite;" href="#" class="btn-off-per btn-small center" type="submit" name="btn-off-per " onclick="M.toast({html: 'Em construção!'})" >Confirmar</button>
</form>                                 
</div><!-- intervalo atendimento -->

</div>

<div class="col s12 m6 l6"> <!-- Perfis e Contas -->
<div class="blue-grey darken-1">
<p>Perfis e Contas</p>
</div>
<div style="background-color:ghostwhite">
<p>Criar Novo Usuário</p>
<a class="btn-add-user btn-floating" href="#" style="margin: 10px;" onclick="M.toast({html: 'Em construção!'})"><i class="material-icons">add</i></a>
</div>
<div style="background-color:ghostwhite">
<p>Recuperar Senha</p>
<a class="btn-user-recover btn-floating" href="#" style="margin: 10px;" onclick="M.toast({html: 'Em construção!'})">
<i class="material-icons">lock</i></a>
</div>
<div style="background-color:ghostwhite">
<p>Mais Configurações</p>
<a class="btn-user-recover btn-floating" href="#" style="margin: 10px;" onclick="M.toast({html: 'Em construção!'})">
<i class="material-icons">settings</i></a>

</div>
</div>
</div>
</div>
</div><!--id config-->
<div id="sair" class="col s12"></div><!--id sair-->
</section>





<!-- Modal Deletar -->


<div id="modalDeletar" class="modal">
<div class="modal-content">
<h4>Atenção</h4>
<p>Tem certeza que deseja excluir?</p>
</div>
<div class="modal-footer">

<a href="<?php echo DIRPAGE.'controllers/controllerDelete.php?id='.$_GET['id']; ?>" class="btn waves-effect waves-light red" name="btn-deletar">Sim, tenho certeza.</a>

<a href="#!" class="modal-close waves-effect waves-green btn-flat green">Cancelar</a>



</div>
</div>


<?php include(DIRREQ."lib/html/footer.php"); ?>