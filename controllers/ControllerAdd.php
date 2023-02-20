<?php
include ("../config/config.php");
$objEvents=new \Classes\ClassEvents();

#sessão
if(!isset($_SESSION)) {session_start();}

#se o cadastro dor do usuario
if(isset($_POST['btn-cad-user'])):

#recebe de views add e atribui as variaveis
//atribuições
$nome = addslashes($_POST['nome']);
$telefone = addslashes($_POST['telefone']);
$email = addslashes($_POST['email']);
$data = addslashes($_POST['date']);
$hora = addslashes($_POST['hora']);
$servico = addslashes($_POST['servico']);
 //conversão da datetime
$start = new \DateTime($data.' '.$hora, new \DateTimeZone('America/Sao_Paulo'));
$duracao = 20;
$title = 'agendado';
$description = 'Agendamento feito.';


#chama a funcao createevent na classe events
//passando parametros
$objEvents->createEvent(
0,
$nome,  
$telefone,
$email,
$start->format("Y-m-d H:i:s"),
$start->modify('+'.$duracao.'minutes')->format("Y-m-d H:i:s"),
$servico,
$title,
$description,
'blue',
);

$_SESSION['mensagem'] = "Reserva cadastrada com sucesso!
<br> Nome: ".$nome."
<br> Telefone: ".$telefone."
<br> Data: ".$start->format("Y-m-d H:i:s")."
<br><br>Uma confirmação foi enviada para: ".$email.

header('Location: ../views/user/confirm.php?status=sucesso');


#se o cadastro dor do manager
elseif(isset($_POST['btn-cad-man'])):

#recebe de views add e atribui as variaveis
//atribuições
$nome = addslashes($_POST['nome']);
$telefone = addslashes($_POST['telefone']);
$email = addslashes($_POST['email']);
$data = addslashes($_POST['date']);
$hora = addslashes($_POST['hora']);
$servico = addslashes($_POST['servico']);
 //conversão da datetime
$start = new \DateTime($data.' '.$hora, new \DateTimeZone('America/Sao_Paulo'));
$duracao = 20;
$title = 'agendado';
$description = 'Agendamento feito.';
$solicitante = "Gerenciador";

#chama a funcao createevent na classe events
//passando parametros
$objEvents->createEvent(
0,
$nome,  
$telefone,
$email,
$start->format("Y-m-d H:i:s"),
$start->modify('+'.$duracao.'minutes')->format("Y-m-d H:i:s"),
$servico,
$title,
$description,
'blue',
);

$_SESSION['mensagem'] = "Reserva cadastrada com sucesso!
<br> Nome: ".$nome."
<br> Telefone: ".$telefone."
<br> Data: ".$start->format("Y-m-d H:i:s")."
<br> Uma confirmação foi enviada para: ".$email."
<br> Solicitante: ".$solicitante.

header('Location: ../views/manager/confirm.php?status=sucesso');


endif;