<?php
	/**
	 * @author: Paulo César Marques
	 */
	include_once "SimulationDAOInterface.php";
	class SimulationDAO implements SimulationDAOInterface
	{
		public static function getById($id)
		{
			include_once "SimulationVO.php";
			include "conectar.php";
			$sql = "SELECT * FROM Simulation WHERE id = ".$id;
			if ($sql = $mysqli->prepare($sql)) 
			{
				$sql->execute();
				$sql->bind_result($id, $nome  ,  $dataExecucao  ,  $largura  ,  $altura  ,  $status  ,  $idUser );
				$sql->fetch();
				$Simulation = new SimulationVO();
				$Simulation->setId($id);
                $Simulation->setNome ($nome);
                $Simulation->setDataExecucao ($dataExecucao);
                $Simulation->setLargura ($largura);
                $Simulation->setAltura ($altura);
                $Simulation->setStatus ($status);
                $Simulation->setIdUser ($idUser);
	            $mysqli->close();
			    return $Simulation;
			}
		}
	
		public static function getListAll(){
			include_once "SimulationVO.php";
			include "conectar.php";
			$sql = 'SELECT * FROM Simulation';
			
			if ($sql = $mysqli->prepare($sql)) 
			{
				$sql->execute();
				$sql->bind_result($id, $nome  ,  $dataExecucao  ,  $largura  ,  $altura  ,  $status  ,  $idUser );
				$lista= array();
				$i=0;
				while ($sql->fetch()) 
				{
					$Simulation = new SimulationVO();
					$Simulation->setId($id);
                    $Simulation->setNome ($nome);
                    $Simulation->setDataExecucao ($dataExecucao);
                    $Simulation->setLargura ($largura);
                    $Simulation->setAltura ($altura);
                    $Simulation->setStatus ($status);
                    $Simulation->setIdUser ($idUser);
	                $lista[$i]=$Simulation;
					$i++;
				}
			$mysqli->close();
			return $lista;
			}
			//TRATAR EXECEÇÃO!
		}
		
		public static function getList($condicao)
		{
			include_once "SimulationVO.php";
			include "conectar.php";
			$sql = 'SELECT * FROM Simulation where '.$condicao;
			
			if ($sql = $mysqli->prepare($sql)) 
			{
				$sql->execute();
				$sql->bind_result($id, $nome  ,  $dataExecucao  ,  $largura  ,  $altura  ,  $status  ,  $idUser );
				$lista=array();
				$i=0;
				while ($sql->fetch()) 
				{
					$Simulation = new SimulationVO();
					$Simulation->setId($id);
                    $Simulation->setNome ($nome);
                    $Simulation->setDataExecucao ($dataExecucao);
                    $Simulation->setLargura ($largura);
                    $Simulation->setAltura ($altura);
                    $Simulation->setStatus ($status);
                    $Simulation->setIdUser ($idUser);
	                $lista[$i]=$Simulation;
					$i++;
				}
			$mysqli->close();
			return $lista;
			}
			//TRATAR EXECEÇÃO!
		}
		
		public static function delete($id)
		{
			include_once "SimulationVO.php";
			include "conectar.php";
			$sql = 'DELETE FROM Simulation where id='.$id;
			
			if ($sql = $mysqli->prepare($sql)) 
			{
				$deletado = $sql->execute();
				$mysqli->close();
				return $deletado;
			}
			//TRATAR EXECEÇÃO!
		}
		public static function deleteCondicao($condicao)
		{
			include_once "SimulationVO.php";
			include "conectar.php";
			$sql = 'DELETE FROM Simulation where '.$condicao;
			
			if ($sql = $mysqli->prepare($sql)) 
			{
				$deletado = $sql->execute();
				$mysqli->close();
				return $deletado;
			}
			//TRATAR EXECEÇÃO!
		}
		
		public static function insert($Simulation)
		{
			include "conectar.php";
			$sql = "INSERT INTO Simulation ( nome  ,  dataExecucao  ,  largura  ,  altura  ,  status  ,  idUser ) VALUES ( '".$Simulation->getNome()."'  ,  '".$Simulation->getDataExecucao()."'  ,  '".$Simulation->getLargura()."'  ,  '".$Simulation->getAltura()."'  ,  '".$Simulation->getStatus()."'  ,  '".$Simulation->getIdUser()."' )";
			$mysqli->query($sql);
			$id=$mysqli->insert_id;
			$mysqli->close();
			return $id;
		}
		
		public static function update($Simulation)
		{
			include "conectar.php";
			$sql = "UPDATE Simulation SET id='".$Simulation->getId()."',  nome = '".$Simulation->getNome()."'  ,  dataExecucao = '".$Simulation->getDataExecucao()."'  ,  largura = '".$Simulation->getLargura()."'  ,  altura = '".$Simulation->getAltura()."'  ,  status = '".$Simulation->getStatus()."'  ,  idUser = '".$Simulation->getIdUser()."'   WHERE id='".$Simulation->getId()."'";
			$alterado = $mysqli->query($sql);
			$mysqli->close();
			return $alterado;
		}
	}
?>
