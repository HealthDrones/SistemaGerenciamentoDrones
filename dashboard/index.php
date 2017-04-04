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

  if(isset($_GET['pag']) && $_GET['pag']!=0){
 		$pag = $_GET['pag'];
 	}else{
 		$pag = 1;
 	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Sistema de Gerenciamento HealthDrones</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <!-- <link href="../css/bootstrap.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen" charset="utf-8">
  

</head>
<body>
<div class="navbar-fixed">
  <nav class="blue darken-3" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">HealthDrones</a>
          <ul class="right hide-on-med-and-down">
        <li><a href="CadastroUsuarios.php" rel="superbox[iframe][1024x550]">Cadastro de Usuários</a></li>
        <li><a href="drones.php" rel="superbox[iframe][1024x550]">Cadastro de Drones</a></li>
        <li><a href="../Simulations/" rel="superbox[iframe][1200x700]">Simulações</a></li>
        <li><a href="?acao=sair">Sair</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  </div>
  <?php
  	if($usuarioAtivo->getStatus()==1){
  		echo '<div class="row orange lighten-3">';
  	}else{
  		echo '<div class="row green lighten-3">';
  	}
  	?>
      <div class="container">
      <?php echo "   Sistema de Gerenciamento HealthDrones, você está logado como: ".$usuarioAtivo->getNome()."   "; ?>
      </div>
    </div>
  <div class="container">
    <div class="section">
      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m12">
          <div class="icon-block">
          	<div class="card grey lighten-5">
	            <div class="card-content">
                <h5><i class="large material-icons">store</i>
                  Drones do Sistema</h5>
	            <br />
	            <script src="../js/form.js"></script>
	            <table class="striped">
			        <thead>
			          <tr>
			              <th data-field="name"><b>Name</b></th>
			              <th data-field="atividade"><b>Tipo</b></th>
			              <th data-field="inscricao"><b>Comunicação</b></th>
                    <th data-field="inscricao"><b>Açoes</b></th>
			          </tr>
			        </thead>
              <?php 
                $drones = Fachada::getListAllVehicle();
                if(count($drones) > 0){
                  echo '<tbody>';
                  foreach ($drones as $drone) {
                    echo '<tr><td>'.$drone->getNome().'</td><td>'.$drone->getTipo().'</td><td>'.$drone->getComunicacao().'</td>';
                    echo '<td><button class="waves-effect waves-light btn red lighten-2" onclick="deletar("");"><i class="large material-icons">delete</i></button> <button class="waves-effect waves-light btn blue lighten-2"><i class="large material-icons">mode_edit</i></button></td>';
                  }
                  echo '</tbody>';
                }else{
                  echo '<tbody><tr>Nenhum Drone Cadastrado</tr></tbody>';
                }
              ?>
            </table>
	          </div>
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
          <h5 class="white-text">Sistema de Gerenciamento HealthDrones</h5>
          <p class="grey-text text-lighten-4">
		  	Universidade Federal Rural de Pernambuco - UFRPE<br>
		  	Departamento de Estatística e Informática - DEINFO<br>
			Sistema de Gerenciamento de Missões de Drones de Monitoramento Ambiental.
			</p>
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
