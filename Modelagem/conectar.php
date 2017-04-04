<?php

	$servidor = 'localhost';
	$banco = 'healthdrones';
	$usuario = 'root';
	$senha = 'senha'; 
//	$mysqli = mysql_connect($servidor, $usuario, $senha, $banco);
////	$db = mysql_select_db($banco,$link);
//	if(!$mysqli) {
//		echo "erro ao conectar ao banco de dados!";
//		die();
//	}
	$mysqli = new mysqli($servidor, $usuario, $senha, $banco);
	if ($mysqli->connect_errno) {
	    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}

//	$link = mysqli_connect("127.0.0.1", "eneep201_webadm", ")kB_liZmR{gh", "eneep201_inscricoes");
//
//	if (!$link) {
//	    echo "Error: Unable to connect to MySQL." . PHP_EOL;
//	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
//	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
//	    die();
//	    exit;
//	}

//	$mysqli = new mysqli('localhost', 'root', '', 'snctmo');
//	$mysqli = new mysqli('localhost', 'root', '', 'eneep2016');
//	$mysqli = new mysqli('localhost', 'bitcodet_mouast', 'certificadosMO2014', 'bitcodet_snctmo');
//	if (mysqli_connect_errno()) {
//	    die('N�o foi poss�vel conectar ao Banco de dados: ' . mysqli_connect_error());
//	    exit();
//	}

?>
