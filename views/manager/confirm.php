<?php include("../../config/config.php"); ?>
<?php include(DIRREQ."lib/html/header.php"); ?>

<?php
#sessão
if(!isset($_SESSION)) {session_start();}
?>

<!-- RESPOSTA -->
<section class="bloco scrollspy" id="confirmacao">
<div class="row container center">
<div class="col s12">
<div class="card grey lighten-2" style="padding-bottom: 100px;">
<div class="card-content black-text">
<span class="card-title">Status da Reserva</span>
</div>
<div class="card-content black-text">
<p><?php echo $_SESSION['mensagem'];?></p>

</div>
<div class="card-content white-text">
<a href="../../index.php" class="btn btn-small halfway-fab waves-effect waves-light green">Home</a>
<a href="index.php" class="btn btn-small halfway-fab waves-effect waves-light green">Outra Reserva</a>
</div>

</div>
</div>

</div>


</section>

<?php include(DIRREQ."includes/footer.php"); ?>
