<?php
	/**
	 * @author: Paulo César Marques
	 */
	include_once "FileSimulationDAOInterface.php";
	class FileSimulationDAO implements FileSimulationDAOInterface
	{
		public static function getById($id)
		{
			include_once "FileSimulationVO.php";
			include "conectar.php";
			$sql = "SELECT * FROM FileSimulation WHERE id = ".$id;
			if ($sql = $mysqli->prepare($sql)) 
			{
				$sql->execute();
				$sql->bind_result($id, $nome  ,  $caminho  ,  $extensao  ,  $metadata  ,  $idSimulation );
				$sql->fetch();
				$FileSimulation = new FileSimulationVO();
				$FileSimulation->setId($id);
                $FileSimulation->setNome ($nome);
                $FileSimulation->setCaminho ($caminho);
                $FileSimulation->setExtensao ($extensao);
                $FileSimulation->setMetadata ($metadata);
                $FileSimulation->setIdSimulation ($idSimulation);
	            $mysqli->close();
			    return $FileSimulation;
			}
		}
	
		public static function getListAll(){
			include_once "FileSimulationVO.php";
			include "conectar.php";
			$sql = 'SELECT * FROM FileSimulation';
			
			if ($sql = $mysqli->prepare($sql)) 
			{
				$sql->execute();
				$sql->bind_result($id, $nome  ,  $caminho  ,  $extensao  ,  $metadata  ,  $idSimulation );
				$lista= array();
				$i=0;
				while ($sql->fetch()) 
				{
					$FileSimulation = new FileSimulationVO();
					$FileSimulation->setId($id);
                    $FileSimulation->setNome ($nome);
                    $FileSimulation->setCaminho ($caminho);
                    $FileSimulation->setExtensao ($extensao);
                    $FileSimulation->setMetadata ($metadata);
                    $FileSimulation->setIdSimulation ($idSimulation);
	                $lista[$i]=$FileSimulation;
					$i++;
				}
			$mysqli->close();
			return $lista;
			}
			//TRATAR EXECEÇÃO!
		}
		
		public static function getList($condicao)
		{
			include_once "FileSimulationVO.php";
			include "conectar.php";
			$sql = 'SELECT * FROM FileSimulation where '.$condicao;
			
			if ($sql = $mysqli->prepare($sql)) 
			{
				$sql->execute();
				$sql->bind_result($id, $nome  ,  $caminho  ,  $extensao  ,  $metadata  ,  $idSimulation );
				$lista=array();
				$i=0;
				while ($sql->fetch()) 
				{
					$FileSimulation = new FileSimulationVO();
					$FileSimulation->setId($id);
                    $FileSimulation->setNome ($nome);
                    $FileSimulation->setCaminho ($caminho);
                    $FileSimulation->setExtensao ($extensao);
                    $FileSimulation->setMetadata ($metadata);
                    $FileSimulation->setIdSimulation ($idSimulation);
	                $lista[$i]=$FileSimulation;
					$i++;
				}
			$mysqli->close();
			return $lista;
			}
			//TRATAR EXECEÇÃO!
		}
		
		public static function delete($id)
		{
			include_once "FileSimulationVO.php";
			include "conectar.php";
			$sql = 'DELETE FROM FileSimulation where id='.$id;
			
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
			include_once "FileSimulationVO.php";
			include "conectar.php";
			$sql = 'DELETE FROM FileSimulation where '.$condicao;
			
			if ($sql = $mysqli->prepare($sql)) 
			{
				$deletado = $sql->execute();
				$mysqli->close();
				return $deletado;
			}
			//TRATAR EXECEÇÃO!
		}
		
		public static function insert($FileSimulation)
		{
			include "conectar.php";
			$sql = "INSERT INTO FileSimulation ( nome  ,  caminho  ,  extensao  ,  metadata  ,  idSimulation ) VALUES ( '".$FileSimulation->getNome()."'  ,  '".$FileSimulation->getCaminho()."'  ,  '".$FileSimulation->getExtensao()."'  ,  '".$FileSimulation->getMetadata()."'  ,  '".$FileSimulation->getIdSimulation()."' )";
			$mysqli->query($sql);
			$id=$mysqli->insert_id;
			$mysqli->close();
			return $id;
		}
		
		public static function update($FileSimulation)
		{
			include "conectar.php";
			$sql = "UPDATE FileSimulation SET id='".$FileSimulation->getId()."',  nome = '".$FileSimulation->getNome()."'  ,  caminho = '".$FileSimulation->getCaminho()."'  ,  extensao = '".$FileSimulation->getExtensao()."'  ,  metadata = '".$FileSimulation->getMetadata()."'  ,  idSimulation = '".$FileSimulation->getIdSimulation()."'   WHERE id='".$FileSimulation->getId()."'";
			$alterado = $mysqli->query($sql);
			$mysqli->close();
			return $alterado;
		}
	}
?>
