<?php
	/**
	 * @author: Paulo César Marques
	 */
	include_once "SimulationVehicleDAOInterface.php";
	class SimulationVehicleDAO implements SimulationVehicleDAOInterface
	{
		public static function getById($id)
		{
			include_once "SimulationVehicleVO.php";
			include "conectar.php";
			$sql = "SELECT * FROM SimulationVehicle WHERE id = ".$id;
			if ($sql = $mysqli->prepare($sql)) 
			{
				$sql->execute();
				$sql->bind_result($id, $idSimularion  ,  $idVehicle );
				$sql->fetch();
				$SimulationVehicle = new SimulationVehicleVO();
				$SimulationVehicle->setId($id);
                $SimulationVehicle->setIdSimularion ($idSimularion);
                $SimulationVehicle->setIdVehicle ($idVehicle);
	            $mysqli->close();
			    return $SimulationVehicle;
			}
		}
	
		public static function getListAll(){
			include_once "SimulationVehicleVO.php";
			include "conectar.php";
			$sql = 'SELECT * FROM SimulationVehicle';
			
			if ($sql = $mysqli->prepare($sql)) 
			{
				$sql->execute();
				$sql->bind_result($id, $idSimularion  ,  $idVehicle );
				$lista= array();
				$i=0;
				while ($sql->fetch()) 
				{
					$SimulationVehicle = new SimulationVehicleVO();
					$SimulationVehicle->setId($id);
                    $SimulationVehicle->setIdSimularion ($idSimularion);
                    $SimulationVehicle->setIdVehicle ($idVehicle);
	                $lista[$i]=$SimulationVehicle;
					$i++;
				}
			$mysqli->close();
			return $lista;
			}
			//TRATAR EXECEÇÃO!
		}
		
		public static function getList($condicao)
		{
			include_once "SimulationVehicleVO.php";
			include "conectar.php";
			$sql = 'SELECT * FROM SimulationVehicle where '.$condicao;
			
			if ($sql = $mysqli->prepare($sql)) 
			{
				$sql->execute();
				$sql->bind_result($id, $idSimularion  ,  $idVehicle );
				$lista=array();
				$i=0;
				while ($sql->fetch()) 
				{
					$SimulationVehicle = new SimulationVehicleVO();
					$SimulationVehicle->setId($id);
                    $SimulationVehicle->setIdSimularion ($idSimularion);
                    $SimulationVehicle->setIdVehicle ($idVehicle);
	                $lista[$i]=$SimulationVehicle;
					$i++;
				}
			$mysqli->close();
			return $lista;
			}
			//TRATAR EXECEÇÃO!
		}
		
		public static function delete($id)
		{
			include_once "SimulationVehicleVO.php";
			include "conectar.php";
			$sql = 'DELETE FROM SimulationVehicle where id='.$id;
			
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
			include_once "SimulationVehicleVO.php";
			include "conectar.php";
			$sql = 'DELETE FROM SimulationVehicle where '.$condicao;
			
			if ($sql = $mysqli->prepare($sql)) 
			{
				$deletado = $sql->execute();
				$mysqli->close();
				return $deletado;
			}
			//TRATAR EXECEÇÃO!
		}
		
		public static function insert($SimulationVehicle)
		{
			include "conectar.php";
			$sql = "INSERT INTO SimulationVehicle ( idSimularion  ,  idVehicle ) VALUES ( '".$SimulationVehicle->getIdSimularion()."'  ,  '".$SimulationVehicle->getIdVehicle()."' )";
			$mysqli->query($sql);
			$id=$mysqli->insert_id;
			$mysqli->close();
			return $id;
		}
		
		public static function update($SimulationVehicle)
		{
			include "conectar.php";
			$sql = "UPDATE SimulationVehicle SET id='".$SimulationVehicle->getId()."',  idSimularion = '".$SimulationVehicle->getIdSimularion()."'  ,  idVehicle = '".$SimulationVehicle->getIdVehicle()."'   WHERE id='".$SimulationVehicle->getId()."'";
			$alterado = $mysqli->query($sql);
			$mysqli->close();
			return $alterado;
		}
	}
?>
