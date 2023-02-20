<?php
include ("../config/config.php");
$objEvents=new \Classes\ClassEvents();

#sessão
if(!isset($_SESSION)) {session_start();}

#atribuição
$id=filter_input(INPUT_GET,'id',FILTER_DEFAULT);
$objEvents->deleteEvent($id);


$_SESSION['mensagem'] = "Reserva apagada com sucesso!";

header('Location: ../views/manager/confirm.php?status=sucesso');
