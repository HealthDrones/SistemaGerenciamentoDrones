<?php
	/**
	 * @author: Paulo César Marques
	 */
	include_once "VehicleDAOInterface.php";
	class VehicleDAO implements VehicleDAOInterface
	{
		public static function getById($id)
		{
			include_once "VehicleVO.php";
			include "conectar.php";
			$sql = "SELECT * FROM Vehicle WHERE id = ".$id;
			if ($sql = $mysqli->prepare($sql)) 
			{
				$sql->execute();
				$sql->bind_result($id, $nome  ,  $tipo  ,  $comunicacao  ,  $linguagem );
				$sql->fetch();
				$Vehicle = new VehicleVO();
				$Vehicle->setId($id);
                $Vehicle->setNome ($nome);
                $Vehicle->setTipo ($tipo);
                $Vehicle->setComunicacao ($comunicacao);
                $Vehicle->setLinguagem ($linguagem);
	            $mysqli->close();
			    return $Vehicle;
			}
		}
	
		public static function getListAll(){
			include_once "VehicleVO.php";
			include "conectar.php";
			$sql = 'SELECT * FROM Vehicle';
			
			if ($sql = $mysqli->prepare($sql)) 
			{
				$sql->execute();
				$sql->bind_result($id, $nome  ,  $tipo  ,  $comunicacao  ,  $linguagem );
				$lista= array();
				$i=0;
				while ($sql->fetch()) 
				{
					$Vehicle = new VehicleVO();
					$Vehicle->setId($id);
                    $Vehicle->setNome ($nome);
                    $Vehicle->setTipo ($tipo);
                    $Vehicle->setComunicacao ($comunicacao);
                    $Vehicle->setLinguagem ($linguagem);
	                $lista[$i]=$Vehicle;
					$i++;
				}
			$mysqli->close();
			return $lista;
			}
			//TRATAR EXECEÇÃO!
		}
		
		public static function getList($condicao)
		{
			include_once "VehicleVO.php";
			include "conectar.php";
			$sql = 'SELECT * FROM Vehicle where '.$condicao;
			
			if ($sql = $mysqli->prepare($sql)) 
			{
				$sql->execute();
				$sql->bind_result($id, $nome  ,  $tipo  ,  $comunicacao  ,  $linguagem );
				$lista=array();
				$i=0;
				while ($sql->fetch()) 
				{
					$Vehicle = new VehicleVO();
					$Vehicle->setId($id);
                    $Vehicle->setNome ($nome);
                    $Vehicle->setTipo ($tipo);
                    $Vehicle->setComunicacao ($comunicacao);
                    $Vehicle->setLinguagem ($linguagem);
	                $lista[$i]=$Vehicle;
					$i++;
				}
			$mysqli->close();
			return $lista;
			}
			//TRATAR EXECEÇÃO!
		}
		
		public static function delete($id)
		{
			include_once "VehicleVO.php";
			include "conectar.php";
			$sql = 'DELETE FROM Vehicle where id='.$id;
			
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
			include_once "VehicleVO.php";
			include "conectar.php";
			$sql = 'DELETE FROM Vehicle where '.$condicao;
			
			if ($sql = $mysqli->prepare($sql)) 
			{
				$deletado = $sql->execute();
				$mysqli->close();
				return $deletado;
			}
			//TRATAR EXECEÇÃO!
		}
		
		public static function insert($Vehicle)
		{
			include "conectar.php";
			$sql = "INSERT INTO Vehicle ( nome  ,  tipo  ,  comunicacao  ,  linguagem ) VALUES ( '".$Vehicle->getNome()."'  ,  '".$Vehicle->getTipo()."'  ,  '".$Vehicle->getComunicacao()."'  ,  '".$Vehicle->getLinguagem()."' )";
			$mysqli->query($sql);
			$id=$mysqli->insert_id;
			$mysqli->close();
			return $id;
		}
		
		public static function update($Vehicle)
		{
			include "conectar.php";
			$sql = "UPDATE Vehicle SET id='".$Vehicle->getId()."',  nome = '".$Vehicle->getNome()."'  ,  tipo = '".$Vehicle->getTipo()."'  ,  comunicacao = '".$Vehicle->getComunicacao()."'  ,  linguagem = '".$Vehicle->getLinguagem()."'   WHERE id='".$Vehicle->getId()."'";
			$alterado = $mysqli->query($sql);
			$mysqli->close();
			return $alterado;
		}
	}
?>
