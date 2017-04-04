<?php
 session_start();
 	include_once "../Modelagem/Fachada.php";
 	$usuarioAtivo = Fachada::getByIdUsuario($_SESSION['idUsuario']);

  if(isset($_GET['acao']) && $_GET['acao'] == 'sair' ):
		unset($_SESSION['idUsuario']);
		unset($_SESSION['status']);
 		session_destroy();
 	endif;

  if(!isset($_SESSION['idUsuario']) && !isset($_SESSION['status'])):
    header("location:../index.php");
    die();
  endif;

 	if($usuarioAtivo->getStatus()!=3):
 		echo "<script language='javascript'>alert('Você não tem acesso a esta área!');</script>";
 		header("location:../index.php");
 		die();
 	endif;

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Cadastro de Drones</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <!-- <link href="../css/bootstrap.min.css" rel="stylesheet"> -->

  <!-- Custom CSS -->
  <!--<link href="../css/portfolio-item.css" rel="stylesheet">-->

  <!--<link rel="stylesheet" href="../css/login.css" type="text/css" media="screen" charset="utf-8">-->


</head>
<body>
<div class="navbar-fixed">
  <nav class="blue darken-3" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Cadastro de Drones</a>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  </div>
</div>
  <div class="container">
    <div class="section">
      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m12">
          <div class="icon-block">
          	<div class="card grey lighten-5">
              <form class="col s12" method="POST" action="salvaDrones.php" >
                <div class="row">
                  <div class="input-field col s6">
                    <input placeholder="Nome do Drone" id="nome" name="nome" type="text" class="validate">
                    <label for="nome">Nome:</label>
                  </div>
                  <div class="input-field col s6">
                    <input placeholder="Tipo de Drone" id="tipo" name="tipo" type="text" class="validate">
                    <label for="tipo">Tipo:</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <input placeholder="Tipo de Comunicação" id="comunicacao" name="comunicacao" type="text" class="validate">
                    <label for="comunicacao">Tipo de Comunicação:</label>
                  </div>
                  <div class="input-field col s6">
                    <input placeholder="Linguagem de Programação" id="linguagem" name="linguagem" type="text" class="validate">
                    <label for="linguagem">Tipo de Linguagem de Programação:</label>
                  </div>
                </div>
                <div class="row">
                  <button class="waves-effect waves-light btn blue lighten-2" type="submit">Salvar dados</button>
                  <button class="waves-effect waves-light btn teal lighten-4" type="reset" >Limpar campos</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br /><br />
  </div>

  <footer class="page-footer blue darken-3">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <!-- <h5 class="white-text">Sistema de Gerenciamento HealthDrones</h5> -->
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      by <a class="brown-text text-lighten-3" href="http://twitter.com/pcfmarques">PcMarques</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="../js/jquery-2.1.1.min.js"></script>
  <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>
  <link rel="stylesheet" href="../css/jquery.superbox.css" type="text/css" media="all" />
  <script src="../js/jquery-1.8.0.min.js"></script>
  <script type="text/javascript" src="../js/jquery.superbox-min.js"></script>
	<script type="text/javascript">
			$(function(){
				$.superbox();
			});
			$.superbox.settings = {
				boxId: "superbox", // Id attribute of the "superbox" element
				boxClasses: "", // Class of the "superbox" element
				overlayOpacity: .8, // Background opaqueness
				boxWidth: "900", // Default width of the box
				boxHeight: "550", // Default height of the box
				loadTxt: "Carregando...", // Loading text
				closeTxt: "X", // "Close" button text
				prevTxt: "Anterior", // "Previous" button text
				nextTxt: "Próximo" // "Next" button text
			};
			window.name = "main";
	</script>


  </body>
</html>
