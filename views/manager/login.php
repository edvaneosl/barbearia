<?php include("../../config/config.php"); ?>
<?php include(DIRREQ."lib/html/header.php"); ?>
<?php $objLogin=new \Classes\ClassLogin();
?>

<?php
//inicia sessão se não tiver nenhuma
	if(!isset($_SESSION)):
	    { 
	        session_start(); 
	    }
	elseif(isset($_SESSION['id'])):
		{
			header('Location: ../../index.php');
		}
	endif;
?>



<!-- TELA DE LOGIN GERENCIAMENTO -->

<section class="funcionario bloco scrollspy" id="home">
<div class="container">

<div class="row justify-content-center">
<img src="../../img/logo.jpg" class=" homeimg img-responsive center-block" alt="Responsive image">
<br>
</div>
<div class="row center">

<h5 class="white-text">Área do Funcionário</h5>

</div>

<?php
if(!empty($erros)):
foreach($erros as $erro):
echo $erro;
endforeach;
endif;


?>
<form action = "<?php echo DIRPAGE.'controllers/ControllerLogin.php'; ?>" method = "POST">
<div class="form-row justify-content-center">
<div class="col-md-4 mb-3">
<label for="validationServer01">Usuário</label>
<input type="text" name="login" class="form-control is-valid" id="validationServer01" value="" placeholder="Insira seu usuário" required>
</div>
<div class="col-md-4 mb-3">
<label for="typepass">Senha</label>
<input type="password" name="senha" class="form-control is-valid" id="typepass" value="" placeholder="Insira sua senha" autocomplete="off" required>

</div>
</div>
<div class="center">
<button href="#reservas" class="btn btn-primary blue-grey darken-1" type="submit" name="btn-entrar">Entrar</button><br>
</div>  
<div><br></div>

</form>

</div>





</section>


<?php include(DIRREQ."lib/html/footer.php"); ?>
