<?php
namespace Classes;

use Models\ModelConect;

class ClassLogin extends ModelConect
{

    #Lógica login
    public function autenticarLogin($login,$senha) {

	// verificação no banco de dados
	$b=$this->conectDB()->prepare("SELECT * FROM usuarios WHERE login = ? AND senha = ? ");
	$b->bindParam(1, $login, \PDO::PARAM_STR);
    $b->bindParam(2, $senha, \PDO::PARAM_STR);
    $b->execute();

	if($b->rowCount() >= 1) {

	$usuario = $b->fetch();

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

	//atribui id do usuário
	$_SESSION['id'] = $usuario['id'];
	$_SESSION['nome'] = $usuario['nome'];

	//direciona página ou não
	header("Location: ../views/manager/index.php");
	}
	else {
	header("Location: ../views/manager/login.php");
	}

    }
	
}