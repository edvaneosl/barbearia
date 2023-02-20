<?php
include ("../config/config.php");
$objEvents=new \Classes\ClassEvents();

#sessão
if(!isset($_SESSION)) {session_start();}


if(isset($_POST['btn-editar'])):

#recebe de views add e atribui as variaveis
$id=filter_input(INPUT_POST,'id',FILTER_DEFAULT);
$nome=filter_input(INPUT_POST,'nome',FILTER_DEFAULT);
$telefone=filter_input(INPUT_POST,'telefone',FILTER_DEFAULT);
$email=filter_input(INPUT_POST,'email',FILTER_DEFAULT);
$data=filter_input(INPUT_POST,'date',FILTER_DEFAULT);
$hora=filter_input(INPUT_POST,'hora',FILTER_DEFAULT);
$start=new \DateTime($data.' '.$hora, new \DateTimeZone('America/Sao_Paulo'));
$servico=filter_input(INPUT_POST,'servico',FILTER_DEFAULT);
$title='agendado';
$description='modificado';

#chama a funcao update na classe events
$objEvents->updateEvent(
$id,
$nome,  
$telefone,
$email,
$start->format("Y-m-d H:i:s"),
$start->modify('+'.$servico.'minutes')->format("Y-m-d H:i:s"),
$servico,
$title,
$description,
'orange',
);

$_SESSION['mensagem'] = "Reserva modificada com sucesso!
<br> Nome: ".$nome."
<br> Telefone: ".$telefone."
<br> Data: ".$start->format("Y-m-d H:i:s")."
<br> Email: ".$email.

header('Location: ../views/manager/confirm.php?status=sucesso');

endif;