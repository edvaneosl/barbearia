<?php
include ("../config/config.php");
$objLogin=new \Classes\ClassLogin();

#sessão
if(!isset($_SESSION)) {session_start();}

#recebe de login e atribui as variaveis

// Lógica login
if(isset($_POST['login']) || isset($_POST['senha']))
//teste de entrada 
{
if(strlen($_POST['login']) == 0) {
echo "Preencha seu usuário";} 
else if(strlen($_POST['senha']) == 0) 
{echo "Preencha sua senha";}

//atribuição se a entrada der certo
else { $login = addslashes($_POST['login']); 
$senha = addslashes($_POST['senha']);

$objLogin->autenticarLogin($login,$senha);

}

}
