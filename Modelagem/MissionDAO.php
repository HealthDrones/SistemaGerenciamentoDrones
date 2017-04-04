<?php
	/**
	 * @author: Paulo César Marques
	 */
	include_once "MissionDAOInterface.php";
	class MissionDAO implements MissionDAOInterface
	{
		public static function getById($id)
		{
			include_once "MissionVO.php";
			include "conectar.php";
			$sql = "SELECT * FROM Mission WHERE id = ".$id;
			if ($sql = $mysqli->prepare($sql)) 
			{
				$sql->execute();
				$sql->bind_result($id, $nome  ,  $localidade  ,  $gps  ,  $data  ,  $status  ,  $idSimulation );
				$sql->fetch();
				$Mission = new MissionVO();
				$Mission->setId($id);
                $Mission->setNome ($nome);
                $Mission->setLocalidade ($localidade);
                $Mission->setGps ($gps);
                $Mission->setData ($data);
                $Mission->setStatus ($status);
                $Mission->setIdSimulation ($idSimulation);
	            $mysqli->close();
			    return $Mission;
			}
		}
	
		public static function getListAll(){
			include_once "MissionVO.php";
			include "conectar.php";
			$sql = 'SELECT * FROM Mission';
			
			if ($sql = $mysqli->prepare($sql)) 
			{
				$sql->execute();
				$sql->bind_result($id, $nome  ,  $localidade  ,  $gps  ,  $data  ,  $status  ,  $idSimulation );
				$lista= array();
				$i=0;
				while ($sql->fetch()) 
				{
					$Mission = new MissionVO();
					$Mission->setId($id);
                    $Mission->setNome ($nome);
                    $Mission->setLocalidade ($localidade);
                    $Mission->setGps ($gps);
                    $Mission->setData ($data);
                    $Mission->setStatus ($status);
                    $Mission->setIdSimulation ($idSimulation);
	                $lista[$i]=$Mission;
					$i++;
				}
			$mysqli->close();
			return $lista;
			}
			//TRATAR EXECEÇÃO!
		}
		
		public static function getList($condicao)
		{
			include_once "MissionVO.php";
			include "conectar.php";
			$sql = 'SELECT * FROM Mission where '.$condicao;
			
			if ($sql = $mysqli->prepare($sql)) 
			{
				$sql->execute();
				$sql->bind_result($id, $nome  ,  $localidade  ,  $gps  ,  $data  ,  $status  ,  $idSimulation );
				$lista=array();
				$i=0;
				while ($sql->fetch()) 
				{
					$Mission = new MissionVO();
					$Mission->setId($id);
                    $Mission->setNome ($nome);
                    $Mission->setLocalidade ($localidade);
                    $Mission->setGps ($gps);
                    $Mission->setData ($data);
                    $Mission->setStatus ($status);
                    $Mission->setIdSimulation ($idSimulation);
	                $lista[$i]=$Mission;
					$i++;
				}
			$mysqli->close();
			return $lista;
			}
			//TRATAR EXECEÇÃO!
		}
		
		public static function delete($id)
		{
			include_once "MissionVO.php";
			include "conectar.php";
			$sql = 'DELETE FROM Mission where id='.$id;
			
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
			include_once "MissionVO.php";
			include "conectar.php";
			$sql = 'DELETE FROM Mission where '.$condicao;
			
			if ($sql = $mysqli->prepare($sql)) 
			{
				$deletado = $sql->execute();
				$mysqli->close();
				return $deletado;
			}
			//TRATAR EXECEÇÃO!
		}
		
		public static function insert($Mission)
		{
			include "conectar.php";
			$sql = "INSERT INTO Mission ( nome  ,  localidade  ,  gps  ,  data  ,  status  ,  idSimulation ) VALUES ( '".$Mission->getNome()."'  ,  '".$Mission->getLocalidade()."'  ,  '".$Mission->getGps()."'  ,  '".$Mission->getData()."'  ,  '".$Mission->getStatus()."'  ,  '".$Mission->getIdSimulation()."' )";
			$mysqli->query($sql);
			$id=$mysqli->insert_id;
			$mysqli->close();
			return $id;
		}
		
		public static function update($Mission)
		{
			include "conectar.php";
			$sql = "UPDATE Mission SET id='".$Mission->getId()."',  nome = '".$Mission->getNome()."'  ,  localidade = '".$Mission->getLocalidade()."'  ,  gps = '".$Mission->getGps()."'  ,  data = '".$Mission->getData()."'  ,  status = '".$Mission->getStatus()."'  ,  idSimulation = '".$Mission->getIdSimulation()."'   WHERE id='".$Mission->getId()."'";
			$alterado = $mysqli->query($sql);
			$mysqli->close();
			return $alterado;
		}
	}
?>
