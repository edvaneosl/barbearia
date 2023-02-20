<?php
include ("../config/config.php");
$objEvents=new \Classes\ClassEvents();
echo $objEvents->getEvents();

#sessão
if(!isset($_SESSION)) {session_start();}
