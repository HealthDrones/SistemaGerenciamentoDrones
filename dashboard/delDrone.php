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

  if(isset($_POST['id'])){
    $vehicle = Fachada::getByIdVehicle($_POST['id']);
    $del = Fachada::deleteVehicle($vehicle);
    if($del!=null){
      echo "<script language='javascript'>alert('Drone Deletado!');
            </script>";
    }else{
      echo "<script language='javascript'>alert('Erro ao deletar Drone!');</script>";
      header("location:index.php");
    }

  }else{
    echo "<script language='javascript'>alert('Dados insuficientes para cadastro de Drone!');</script>";
    header("location:index.php");
    die();
  }
?>