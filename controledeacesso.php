<?php
	//error_reporting(E_ALL);
		include_once "Modelagem/Fachada.php";
		if(isset($_POST['login'])){
        $login = mysql_escape_string($_POST['login']);
        $senha = mysql_escape_string(md5($_POST['senha']));
		session_start();
		$lista = Fachada::getListUsuario("login = '".$login."' and senha = '".$senha."'");
		echo "Redirecionando...";
    if(count($lista)>0){
			$_SESSION['idUsuario'] = $lista[0]->getId();
			$_SESSION['status'] = $lista[0]->getStatus();
			if($lista[0]->getStatus()==3){
				echo "<script language='javascript'>
								location.href= 'dashboard/index.php';
							</script>";
			}

		}else{
			echo "<script>alert('Login e/ou Senha invalida'); " .
					"location.href= 'index.php';</script>";
         	die();
		}
    }
?>
