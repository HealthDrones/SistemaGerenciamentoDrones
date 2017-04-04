<?php
session_start();
  include_once "../Modelagem/Fachada.php";
  include_once "../Modelagem/VehicleVO.php";
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

  if(isset($_POST['nome']) && isset($_POST['tipo']) && isset($_POST['comunicacao']) && isset($_POST['linguagem'])){
    $vehicle = new VehicleVO();
    $vehicle->setNome($_POST['nome']);
    $vehicle->setTipo($_POST['tipo']);
    $vehicle->setComunicacao($_POST['comunicacao']);
    $vehicle->setLinguagem($_POST['linguagem']);

    $salvar = Fachada::insertVehicle($vehicle);
    if($salvar!=null){
      echo "<script language='javascript'>alert('Drone Cadastrado com sucesso!');
            </script>";
    }else{
      echo "<script language='javascript'>alert('Erro ao cadastrar Drone!');</script>";
      header("location:index.php");
    }

  }else{
    echo "<script language='javascript'>alert('Dados insuficientes para cadastro de Drone!');</script>";
    header("location:index.php");
    die();
  }
?>
